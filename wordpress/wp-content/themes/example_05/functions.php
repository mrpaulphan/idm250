<?php

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    die('This theme only works in WordPress 4.9.6 or later. ');
}

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
        'main_menu'   => __('Main Navigation'),
        'footer_menu' => __('Footer Navigation'),
    ]);
}

add_action('init', 'register_menus');

/**
 * This function will load in both our styles/scripts into our
 * project correctly. Make sure you include wp_head at the end of your </head>
 * and wp_footer at the end of before closing </body>
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 */
function load_theme_assets()
{
    // You can include these parameters:
    // $handle is simply the name of the stylesheet.
    // $src is where it is located. The rest of the parameters are optional.
    // $deps refers to whether or not this stylesheet is dependent on another stylesheet. If this is set, this stylesheet will not be loaded unless its dependent stylesheet is loaded first.
    // $ver sets the version number.
    // $media can specify which type of media to load this stylesheet in, such as ‘all’, ‘screen’, ‘print’ or ‘handheld.’

    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:100,200,300,300i,400,500,600,700,800,900|Lato:300,400|Crimson+Text:400,400i,600');

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/dist/js/bootstrap.js ');
    wp_enqueue_script('smooth-js', get_template_directory_uri() . '/dist/js/SmoothScroll.js ');
    wp_enqueue_script('isotope', get_template_directory_uri() . '/dist/js/jquery.isotope.js ');
    wp_enqueue_script('carousel', get_template_directory_uri() . '/dist/js/owl.carousel.js ');
    wp_enqueue_script('way', get_template_directory_uri() . '/dist/js/jquery.waypoints.min.js ');
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js');
    wp_enqueue_script('wow', get_template_directory_uri() . '/dist/js/wow.min.js ');
    wp_enqueue_script('script', get_template_directory_uri() . '/dist/js/script.js ');
}
add_action('wp_enqueue_scripts', 'load_theme_assets');

/*
* Enable support for Post Thumbnails on posts and pages.
*
* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
add_theme_support('post-thumbnails');
