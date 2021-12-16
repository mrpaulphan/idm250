<?php

// hook into the init action and call register_taxonomy_for_projects when it fires
add_action('init', 'register_taxonomy_for_projects');

function register_taxonomy_for_projects() {
    $labels = [
    'name'              => _x('Technology', 'taxonomy general name'),
    'singular_name'     => _x('Technology', 'taxonomy singular name'),
    'search_items'      => __('Search Technology'),
    'all_items'         => __('All Technology'),
    'parent_item'       => __('Parent Technology'),
    'parent_item_colon' => __('Parent Technology:'),
    'edit_item'         => __('Edit Technology'),
    'update_item'       => __('Update Technology'),
    'add_new_item'      => __('Add New Technology'),
    'new_item_name'     => __('New Technology Name'),
    'menu_name'         => __('Technology'),
  ];

    // Now register the taxonomy
    register_taxonomy('technologies', ['projects'], [
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'show_in_rest'      => true,
    'rewrite'           => ['slug' => 'technologies'],
  ]);
}

add_action('init', 'register_taxonomy_tag_for_projects');

// function register_taxonomy_tag_for_projects() {
//     $labels = [
//     'name'              => _x('Technology Tag', 'taxonomy general name'),
//     'singular_name'     => _x('Technology Tag', 'taxonomy singular name'),
//     'search_items'      => __('Search Technology Tag'),
//     'all_items'         => __('All Technology Tag'),
//     'parent_item'       => __('Parent Technology Tag'),
//     'parent_item_colon' => __('Parent Technology Tag:'),
//     'edit_item'         => __('Edit Technology Tag'),
//     'update_item'       => __('Update Technology Tag'),
//     'add_new_item'      => __('Add New Technology Tag'),
//     'new_item_name'     => __('New Technology Tag Name'),
//     'menu_name'         => __('Technology Tag'),
//   ];

//     // Now register the taxonomy
//     register_taxonomy('technologies_tags', ['projects'], [
//     'hierarchical'      => false,
//     'labels'            => $labels,
//     'show_ui'           => true,
//     'show_admin_column' => true,
//     'query_var'         => true,
//     'show_in_rest'      => true,
//     'rewrite'           => ['slug' => 'technologies-tags'],
//   ]);
// }
