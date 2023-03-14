<?php
/**
 * Theme initialization
 */
require get_template_directory() . '/includes/setup.php';
/**
 * Register custom post types
 */
require get_template_directory() . '/includes/post-types.php';
/**
 * Register custom taxonomies
 */
require get_template_directory() . '/includes/taxonomies.php';
/**
 * Advance Custom Fields (ACF) configuration
 */
require get_template_directory() . '/includes/acf.php';
/**
 * Custom Helper functions
 */
require get_template_directory() . '/includes/helper.php';