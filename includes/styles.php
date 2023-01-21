<?php
if (!function_exists('wpbt_styles')) :
  function wpbt_styles()
  {
    $theme_version = wp_get_theme()->get('Version');
    $version_string = is_string($theme_version) ? $theme_version : false;

    wp_register_style(
      'wpbt-front',
      get_template_directory_uri() . '/assets/styles/front.css',
      array(),
      $version_string
    );

    wp_enqueue_style('wpbt-front');
  }
endif;
