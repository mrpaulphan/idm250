<?php

/**
 * register taxonomies
 *
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @return void
 */
function idm_register_taxonomies()
{
    $labels = [
        'name' => _x('Categories', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' => __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
        'menu_name' => __('Categories'),
    ];

    register_taxonomy(
        'idm-project-categories',
        ['idm-projects'],
        [
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => ['slug' => 'project-categories'],
        ]
    );
}

add_action('init', 'idm_register_taxonomies', 0);
