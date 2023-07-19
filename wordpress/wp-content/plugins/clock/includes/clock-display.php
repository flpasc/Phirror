<?php

add_shortcode('clock', 'show_clock');

function show_clock() {
  include CLOCK_PLUGIN_PATH . '/includes/templates/clock-display.php';
}
