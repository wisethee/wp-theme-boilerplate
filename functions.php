<?php
// Sets up theme defaults and registers support for various WordPress features.

// Setup
define('WPBT_THEME_DIR', get_template_directory());

// Includes
$rootFiles = glob(WPBT_THEME_DIR . '/includes/*.php');
$subdirectoryFiles = glob(WPBT_THEME_DIR . '/includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);
foreach ($allFiles as $filename) {
  include_once($filename);
}

// Hooks
add_action('after_setup_theme', 'wpbt_support');
add_action('wp_enqueue_scripts', 'wpbt_styles');
add_action('wp_enqueue_scripts', 'wpbt_scripts');
