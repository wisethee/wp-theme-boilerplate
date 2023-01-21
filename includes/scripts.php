<?php

if (!function_exists('wpbt_scripts')) :
  function wpbt_scripts()
  {
    wp_enqueue_script('wpbt-index', get_stylesheet_directory_uri() . '/assets/scripts/index.js', array(), false, true);
  }
endif;
