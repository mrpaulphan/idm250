<?php
/**
 * Function to register custom post types
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 */
function register_custom_post_types()
{
    $arg = [
        'labels' => [
            'name' => 'Projects',
            'singular_name' => 'Project',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'projects'],
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_position' => 5,
        'taxonomies' => ['project-categories'], // Name of custom taxonomy. Only need if you have a custom taxonomy
        'show_in_rest' => true,
    ];
    $post_type_name = 'projects';

    // Register Albums post type
    register_post_type($post_type_name, $arg);
}

add_action('init', 'register_custom_post_types');
