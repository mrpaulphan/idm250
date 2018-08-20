<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!doctype html>
<html>
<head>
<title><?php the_title();?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class();?>
<header>
  <?php wp_nav_menu(['theme_location'  => 'main']); ?>
</header>
