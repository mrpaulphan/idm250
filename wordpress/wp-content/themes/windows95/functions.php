<?php 

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    die('This theme only works in WordPress 4.9.6 or later. ');
}

/**
 * This function will load in both our styles/scripts into our
 * project correctly. Make sure you include wp_head at the end of your </head>
 * and wp_footer at the end of before closing </body>
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 */
function load_theme_assets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css');
    wp_enqueue_script('script', get_template_directory_uri() . '/dist/js/script.js ');
}
add_action('wp_enqueue_scripts', 'load_theme_assets');

/**
 * This function will register the navigation menus.
 * You can call display the menu by calling wp_nav_menu() in your templates
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @method register_nav_menus
 */
function register_menus()
{
    register_nav_menus([
        'main'   => __('Main Navigation')
    ]);
}

add_action('init', 'register_menus');

/**
 * Register our sidebars and widgets into our theme
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function register_widgets()
{
    register_sidebar([
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
    ]);
}

add_action('widgets_init', 'register_widgets');

/**
 * Add post thumbnail support to theme
 *
 * @link https://codex.wordpress.org/Post_Thumbnails
 */
add_theme_support('post-thumbnails');

/**
 * Change the default "default template" name given for wordpress.
 *
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/default_page_template_title
 */

 function rename_default_template()
 {
     return __('Full Width (General Styles)');
 }
add_filter('default_page_template_title', 'rename_default_template');
