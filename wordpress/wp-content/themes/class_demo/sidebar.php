<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

if (!is_active_sidebar('sidebar')) {
    return;
}

dynamic_sidebar('sidebar');
