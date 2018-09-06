<?php

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    die('This theme only works in WordPress 4.9.6 or later. ');
}

function load_theme_assets()
{
    // You can include these parameters:
    // $handle is simply the name of the stylesheet.
    // $src is where it is located. The rest of the parameters are optional.
    // $deps refers to whether or not this stylesheet is dependent on another stylesheet. If this is set, this stylesheet will not be loaded unless its dependent stylesheet is loaded first.
    // $ver sets the version number.
    // $media can specify which type of media to load this stylesheet in, such as ‘all’, ‘screen’, ‘print’ or ‘handheld.’
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_enqueue_script('jqueryd', 'https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.js');
    //wp_enqueue_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', ['jquery']);
    wp_enqueue_script('jquery-masonry'); // note this is not jQuery
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js ');
}
add_action('wp_enqueue_scripts', 'load_theme_assets');

function register_menus()
{
    register_nav_menus([
        'main'   => __('Main Navigation'),
        'footer' => __('Footer Navigation'),
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
        'name'          => 'Blog Sidebar',
        'id'            => 'sidebar',
    ]);
}
add_action('widgets_init', 'register_widgets');

/**
 * Add post thumbnail support to theme
 * @link https://codex.wordpress.org/Post_Thumbnails
 */
add_theme_support('post-thumbnails');
/**
 * Change the default "default template" name given for wordpress.
 * @link https://codex.wordpress.org/Plugin_API/Filter_Reference/default_page_template_title
 */
add_filter('default_page_template_title', function () {
    return __('General');
});
