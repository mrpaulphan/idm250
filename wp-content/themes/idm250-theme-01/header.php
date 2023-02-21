<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IDM250</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  // @link https://developer.wordpress.org/reference/functions/wp_body_open/
  // Fires the wp_body_open action.
  wp_body_open();
  ?>
  <header>
    <p>LOGO GOES HERE</p>
    <nav class="main-menu">
      <?php
      // @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
      wp_nav_menu(['theme_location' => 'primary-menu']);
  ?>
    </nav>
  </header>