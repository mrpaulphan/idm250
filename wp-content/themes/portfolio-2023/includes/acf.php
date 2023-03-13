<?php

/**
 * Save ACF fields to JSON in a directory in your theme
 * @return void
 */
function my_acf_json_save_point($path)
{
    $acf_directory = '/acf';
    $path = get_stylesheet_directory() . $acf_directory;
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

/**
 * Load ACF fields from JSON in a directory in your theme
 * @return void
 */
function my_acf_json_load_point($paths)
{
    unset($paths[0]);
    $acf_directory = '/acf';
    $paths[] = get_stylesheet_directory() . $acf_directory;
    return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function add_acf_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Theme General Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false,
        ]);
    }
}
add_action('init', 'add_acf_options_page');
