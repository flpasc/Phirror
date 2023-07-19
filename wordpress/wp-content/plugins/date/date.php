<?php /**
 * Plugin Name: Date Plugin
 * Description: Simple date plugin showing the actual date
 * Version: 1.0.0
 *Text Domain: date-plugin
 *
 **/

if ( !defined('ABSPATH')) {
  die ('You cannot be here');
}

if (!class_exists('DatePlugin')) {
  class DatePlugin {
    
    public function __construct() {
      define('DATE_PLUGIN_PATH', plugin_dir_path(__FILE__));
    }

    public function enqueue_scripts_and_styles_calendar() {
      wp_enqueue_style('date', plugin_dir_url(__FILE__) . 'assets/css/date.css');
      wp_enqueue_script('date', plugin_dir_url(__FILE__) . 'assets/js/date.js');
      wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Coming+Soon&display=swap');

    }
    
    public function init() {
      include_once DATE_PLUGIN_PATH . 'includes/date.php';
      add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts_and_styles_calendar'));
      add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts_and_styles_calendar'));
    }
  }

  $datePlugin = new DatePlugin;
  $datePlugin->init();
}
