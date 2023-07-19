<?php


add_shortcode('date', 'show_date');

function show_date() {
  include DATE_PLUGIN_PATH . '/includes/templates/date.php';
}
