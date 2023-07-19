<?php

add_shortcode('calendar', 'show_calendar');

function show_calendar() {
  include CALENDAR_PLUGIN_PATH . '/includes/templates/calendar-show.php';
}

