<?php
// link - https://codex.wordpress.org/Functions_File_Explained

//External CSS and JavaScript Files

add_action('wp_enqueue_scripts', 'misha_main_theme_css');

function misha_main_theme_css() {
    wp_enqueue_script('misha-css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'misha_include_jquery');

//Please open wp-includes/js directory. Do you see, a lot of files are there. You can find jQuery there and some fimiliar JS plugins as well. What all that means?

// List of pre registerd scripts
https://developer.wordpress.org/themes/basics/including-css-javascript/#default-scripts-included-and-registered-by-wordpress

function misha_include_jquery() {
    echo '<pre>';
    var_dump('get_stylesheet_directory_uri');
    echo '</pre>';
    wp_enqueue_script('jquery'); // you just have to know a script handle
}
