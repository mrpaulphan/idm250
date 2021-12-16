<?php
add_action('phpmailer_init', 'setup');
function setup(PHPMailer $phpmailer)
{
    $phpmailer->Host = 'mailhog';
    $phpmailer->Port = 1025;
    $phpmailer->IsSMTP();
}

// /**
//  * This file will be the main place to add custom php code into your theme
//  *
//  * @link - https://codex.wordpress.org/Functions_File_Explained
//  * @return void
//  */

// /**
//  * Theme Requirements
//  */
// require get_template_directory() . '/lib/required.php';

// /**
//  * Theme initialization
//  */
// require get_template_directory() . '/lib/setup.php';

// /**
//  * Register custom post types
//  */
// require get_template_directory() . '/lib/custom-post-types.php';

// /**
//  * Register custom taxonomies
//  */
// require get_template_directory() . '/lib/custom-taxonomies.php';
// /**
//  * ACF Setup
//  */
// require get_template_directory() . '/lib/acf.php';
