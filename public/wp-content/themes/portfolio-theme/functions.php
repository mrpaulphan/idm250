<?php
/**
 * This file will be the main place to add custom php code into your theme
 *
 * @link - https://codex.wordpress.org/Functions_File_Explained
 * @return void
 */

/**
 * Theme Requirements
 */
require get_template_directory() . '/lib/required.php';

/**
 * Theme initialization
 */
require get_template_directory() . '/lib/setup.php';

/**
 * Theme Custom Post Types
 */
require get_template_directory() . '/lib/custom-post-types.php';
