<?php

/*
Plugin Name: calendar-modified
Description: This plugin modifies the functionality of the google calendar plugin.
*/

if ( !defined('ABSPATH')) {
  die ('You cannot be here');
}



if (!class_exists('CalendarPluginModified')){
  class CalendarPluginModified {



    public function __construct() {
      define('CALENDAR_PLUGIN_PATH', plugin_dir_path(__FILE__));
      include_once CALENDAR_PLUGIN_PATH . 'includes/templates/calendar-show.php';
    }

    public function enqueue_scripts_and_styles() {
      wp_enqueue_style('calendar', plugin_dir_url(__FILE__) . 'assets/css/calendar-modified.css');
      wp_enqueue_script('calendar', plugin_dir_url(__FILE__) . 'assets/js/calendar-modified.js');
    }

    public function init() {
      add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts_and_styles'));
      add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts_and_styles'));
    }
  }
  $calendarPlugin = new CalendarPluginModified;
  $calendarPlugin->init();
}
  
