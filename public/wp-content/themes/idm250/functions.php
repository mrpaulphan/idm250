<?php
// Check Server PHP Version
// echo '<pre>';
//   var_dump(phpversion());
// echo '</pre>';
if (version_compare('7.4', phpversion(), '>')) {
    die('You must be using PHP 7.4 or greater.');
}

// Check WP Version
if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in WordPress 5.4.2 or later. Please upgrade your WP site');
}

/**
* Include any styles into the site the proper way
*
* @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
*/
function include_styles()
{
    // Example of including an external link
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');

    // Example of including a style local to your theme root
    wp_enqueue_style(
        'idm250-css',
        get_template_directory_uri() . '/dist/styles/main.css'
    );
}
// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_styles');

/**
* Include any scripts into the site the proper way
*
* @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
*/
function include_js_files()
{
    wp_enqueue_script(
        'idm250-js',
        get_template_directory_uri() . '/dist/scripts/main.js',
        [], // $deps
        false, // $version
        true // $in_footer
    );
}
// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_js_files');

/**
* Register the menus on my site
*
* @link https://developer.wordpress.org/reference/functions/register_nav_menus/
* @return void
*/
function register_theme_navigation()
{
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');

/**
 * Render custom menu
 *
 * @param string $menu_name
 * @return array
 */
function idm_render_menu($menu_name)
{
    if (!$menu_name) {
        return;
    }
    // return an array of menu locations that are registered
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
}

/*
 * Enable support for Post Thumbnails on posts and pages.
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
function add_post_thumbnails_support()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_post_thumbnails_support');
