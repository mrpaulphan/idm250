<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php
     $image = get_field('favicon', 'option');
  if(!empty($image)): ?>
  <link rel="icon"
    href="<?php echo $image['url']?>"
    type="image/x-icon" />
  <?php endif; ?>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    if (is_front_page() || is_home()) {
        bloginfo('name');
    } else {
        wp_title('', true, 'right');
        bloginfo('name');
    }
  ?>
  </title>
  <?php // https://developer.wordpress.org/reference/functions/wp_head/;?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  // @link https://developer.wordpress.org/reference/functions/wp_body_open/
  // Fires the wp_body_open action.
  wp_body_open();
  get_template_part('components/header')
  ?>