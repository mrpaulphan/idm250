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

function my_acf_init()
{
    // check function exists
    if (function_exists('acf_register_block')) {
        // register a testimonial block
        acf_register_block([
            'name' => 'logo-cloud',
            'title' => __('Logo Cloud'),
            'description' => __('A custom logo cloud block.'),
            'render_callback' => 'my_acf_block_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => ['logo', 'grid', 'boxes', 'images', 'img grid'],
        ]);
    }
}
add_action('acf/init', 'my_acf_init');

function my_acf_block_render_callback($block)
{
    // ['acf/logo-cloud']
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    // $slug = 'logo-cloud';
    $block_directory = '/blocks';

    // include a template part from within the "blocks/{name-of-block.php}"
    if (file_exists(get_theme_file_path("{$block_directory}/{$slug}.php"))) {
        include get_theme_file_path("{$block_directory}/{$slug}.php");
    }
}
