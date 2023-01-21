<?php

if (!function_exists('wpbt_support')) :
  function wpbt_support()
  {
    add_theme_support('wp-block-styles');
    add_editor_style(get_template_directory_uri() . '/assets/styles/editor.css');

    // Register nav menus.
    register_nav_menus(array(
      'primary' => __('Primary Navigation', '')
    ));
  }
endif;
