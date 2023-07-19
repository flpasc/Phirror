<?php


/**
 * Plugin Name: Clock Plugin
 * Description: Simple clock for a magic mirror
 * Version: 1.0.0
 *Text Domain: clock-plugin
 *
 **/

if ( !defined('ABSPATH'))
{
    die('You cannot be here');
}


if (!class_exists('ClockPlugin'))
{
  class ClockPlugin {
    
    public function __construct() {
        define('CLOCK_PLUGIN_PATH', plugin_dir_path(__FILE__));  
        require_once( CLOCK_PLUGIN_PATH . './vendor/autoload.php');
    }

    public function init() {
        include_once CLOCK_PLUGIN_PATH . 'includes/utilities.php';
        include_once CLOCK_PLUGIN_PATH . 'includes/options-page.php';
        include_once CLOCK_PLUGIN_PATH . 'includes/clock-display.php';
    }
  }


  function clock_enqueue_scripts() {
    wp_enqueue_style('clock' , plugin_dir_url(__FILE__) . 'assets/css/clock.css');
    wp_enqueue_script('clock', plugin_dir_url(__FILE__) . 'assets/js/clock.js');
  }

  add_action('wp_enqueue_scripts', 'clock_enqueue_scripts');
  add_action('admin_enqueue_scripts', 'clock_enqueue_scripts');

  $clockPlugin = new ClockPlugin;
  $clockPlugin->init();
}
