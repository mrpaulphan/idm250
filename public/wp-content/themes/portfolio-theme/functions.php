<?php
/**
 * This file will be the main place to add custom php code into your theme
 *
 * @link - https://codex.wordpress.org/Functions_File_Explained
 * @return void
 */

// Check Server PHP Version
if (version_compare('7.4', phpversion(), '>')) {
    die('You must be using PHP 7.4 or greater.');
}

// Check WP Version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your WP site');
}

/*
 * Enable support for Post Thumbnails on posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');

/**
 * Include any styles into the site the proper way
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function include_css_files() {
    // Example of including an external link
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

    // Example of including a style local to your theme root
    wp_enqueue_style('idm250-css', get_template_directory_uri() . '/dist/css/style.css');
}

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_css_files');

/**
 * Include any scripts into the site the proper way
 *
 * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 */
function include_js_files() {
    wp_enqueue_script('idm250-js', get_template_directory_uri() . '/dist/scripts/app.js');
}

// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_js_files');

/**
 * Register custom sidebar for my theme
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * @return void
 */
function register_theme_sidebar() {
    register_sidebar([
        'name'        => 'Blog Sidebar',
        'id'          => 'blog-sidebar',
        'description' => 'This is a custom sidebar for my theme'
    ]);

    // register_sidebar([
    //     'name'        => 'Footer Column 1',
    //     'id'          => 'footer-column-1',
    //     'description' => 'This is a custom sidebar for my theme'
    // ]);
}

add_action('widgets_init', 'register_theme_sidebar');

/**
 * Register the menus on my site
 *
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 * @return void
 */
function register_theme_navigation() {
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu'  => 'Footer Menu',
        'social_menu'  => 'Social Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');
