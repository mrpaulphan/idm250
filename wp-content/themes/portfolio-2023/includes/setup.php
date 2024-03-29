<?php

/*
* Enable support for Post Thumbnails on posts and pages.
* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
add_theme_support('post-thumbnails');

// Add excerpt support to pages
add_post_type_support('page', 'excerpt');

/**
 * This function is called when the theme is activated. This is where we
 * will add all of our scripts and styles.
 * @return void
 */
function theme_scripts_and_styles()
{
    // Load CSS Reset
    wp_enqueue_style(
        'css-reset',
        'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css',
        [],
        null
    );
    // Load in Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap',
        [],
        null
    );

    // Load in local CSS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_style/}
    wp_enqueue_style(
        'idm250-styles', // name of the stylesheet
        get_template_directory_uri() . '/dist/styles/main.css', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/styles/main.css
        [], // dependencies
        filemtime(get_template_directory() . '/dist/styles/main.css'), // version number
        'all' // media
    );

    wp_enqueue_script(
        'tailwind', // name of the script
        'https://cdn.tailwindcss.com',
        [], // dependencies
        null, // version number
        false // load in footer
    );
    // Enable first-party plugins, like forms and typography, using the plugins query parameter.
    wp_enqueue_script(
        'tailwind-plugins', // name of the script
        'https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"',
        [], // dependencies
        null, // version number
        false // load in footer
    );
    wp_enqueue_script(
        'idm250-scripts', // name of the script
        get_template_directory_uri() . '/dist/scripts/main.js', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/scripts/main.js
        [], // dependencies
        filemtime(get_template_directory() . '/dist/scripts/main.js'), // version number
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

/**
 * @link https://codex.wordpress.org/Navigation_Menus
 * @return void
 */
function register_theme_menus()
{
    register_nav_menus(
        [
            'primary-menu' => 'Primary Menu',
            '404-menu' => '404 Menu',
            'footer-menu' => 'Footer Menu'
        ]
    );
}
add_action('init', 'register_theme_menus');

/**
 * Register custom sidebars
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * @return void
 */
function register_theme_sidebars()
{
    register_sidebar([
        'name' => 'Page Sidebar', // Visual
        'id' => 'page-sidebar', // Unique ID
    ]);
}
add_action('widgets_init', 'register_theme_sidebars');
