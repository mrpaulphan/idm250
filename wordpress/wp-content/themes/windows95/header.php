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

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title();?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
      /* Always have wp_head() just before the closing </head>
        * tag of your theme, or you will break many plugins, which
        * generally use this hook to add elements to <head> such
        * as styles, scripts, and meta tags.
        */
      wp_head();
    ?>
  </head>

  <body <?php body_class();?> >
    <header>
      <?php 
        /**
         * Given a theme_location parameter, the function displays the menu assigned to that location.
         * If no such location exists or no menu is assigned to it,
         * the parameter fallback_cb will determine what is displayed.
         *
         * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
         *
         */
        $arg = [
          'theme_location'  => 'main'
        ];
        wp_nav_menu($arg);
      ?>

      <?php 
        /**
         * Will first attempt to locate the searchform.php file in either the child or the parent, then load it.
         * If it doesn’t exist, then the default search form will be displayed.
         * The default search form is HTML, which will be displayed.
         * There is a filter applied to the search form HTML in order to edit or replace it. The filter is ‘get_search_form’.
         * This will automatically go to /search. You can edit this template by creating a search.php.
         *
         * @link https://developer.wordpress.org/reference/functions/get_search_form/
         *
         */
        get_search_form();
      ?>

    </header>
