<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;


add_action('after_setup_theme', 'load_carbon_fields');
add_action('carbon_fields_register_fields', 'create_options_page');

function load_carbon_fields()
{
  \Carbon_Fields\Carbon_Fields::boot();
}

function create_options_page()
{
  Container::make('theme_options', 'Clock Options')
    ->add_fields(array(

      Field::make('select', 'crb_content_align', 'Timezone')
        ->add_options(array_combine(
          DateTimeZone::listIdentifiers(),
          DateTimeZone::listIdentifiers()
        ))

    ));
}
