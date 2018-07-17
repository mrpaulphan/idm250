<?php 

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    die('This theme only works in WordPress 4.9.6 or later. Please Update WordPress to the latest version.');
}

/**
 * This function will register the navigation menus.
 *
 * @method register_nav_menus
 */

function register_menus()
{
    register_nav_menus(
    [
      'main_menu'   => __('Main Navigation'),
      'footer_menu' => __('Footer Navigation'),
    ]
  );
}

add_action('init', 'register_menus');

/*
 * Load assets
 */
 function assets()
 {
     // Load theme css
     wp_enqueue_style('nervo', get_template_directory_uri() . '/dist/css/screen.css', [], null, false);

     // Load theme js
     wp_enqueue_script('nervo', get_template_directory_uri() . '/dist/js/script.js', [], null, true);
 }

 add_action('wp_enqueue_scripts', 'assets');
