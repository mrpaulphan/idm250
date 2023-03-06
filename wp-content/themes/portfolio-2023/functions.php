<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

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

/*
* Enable support for Post Thumbnails on posts and pages.
* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
*/
add_theme_support('post-thumbnails');

// Add excerpt support to pages
add_post_type_support('page', 'excerpt');

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
 * Get menu items as a flat array to use for custom markup
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @param string $menu_name - Name of the registered menu id
 * @return array $menu_items - Array of WP_Post objects.
 */
function get_theme_menu($menu_name)
{
    // Get menu items as a flat array
    $locations = get_nav_menu_locations();
    // If menu doesn't exist, let's just return an empty array
    if (!isset($locations[$menu_name])) {
        return [];
    }
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
}

/**
 * Register custom taxonomies
 * @link https://developer.wordpress.org/reference/functions/register_taxonomy/
 * @return void
 */
function register_custom_taxonomies()
{
    $args = [
        'labels' => [
            'name' => 'Project Categories',
            'singular_name' => 'Project Category',
            'search_items' => 'Search Project Categories',
            'all_items' => 'All Project Categories',
            'parent_item' => 'Parent Project Category',
            'parent_item_colon' => 'Parent Project Type:',
            'edit_item' => 'Edit Project Category',
            'update_item' => 'Update Project Category',
            'add_new_item' => 'Add New Project Category',
            'new_item_name' => 'New Project Type Name',
            'menu_name' => 'Project Categories',
        ],
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'project/categories'],
        'show_in_rest' => true,
    ];

    $taxonomy_name = 'project-categories'; // name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
    $taxonomy_association = ['projects']; // post types to associate with this taxonomy
    register_taxonomy($taxonomy_name, $taxonomy_association, $args);
}
add_action('init', 'register_custom_taxonomies');

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

function remove_archive_title_prefix($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'remove_archive_title_prefix');
