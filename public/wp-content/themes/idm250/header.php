<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?>
  </title>

  <?php
  // Link - https://developer.wordpress.org/reference/functions/wp_head/
  // Plugins and WordPress core use this function to insert crucial elements into your document (e.g., scripts, styles, and meta tags).
  // Always put wp_head() just before the closing tag of your theme
  wp_head();
  ?>
</head>

<body <?php body_class(); ?>>
  <?php
  // Registered this menu in functions.php
  wp_nav_menu(['theme_location' => 'primary_menu']);

 get_search_form();

  // $menu_items = idm_render_menu('primary_menu');

  // if ($menu_items) {
  // foreach ($menu_items as $key => $row) {
  // echo "<a href='$row->url'>$row->title</a>";
  // }
  // }
?>
  https://artisansweb.net/create-custom-search-form-wordpress/

  <form id="searchform" method="get"
    action="<?php echo esc_url(home_url('/')); ?>">
    <input type="hidden" name="post_type[]" value="book" />
    <input type="hidden" name="post_type[]" value="magazine" />
    <input type="hidden" name="post_type[]" value="ebook" />
    <input type="hidden" name="post_type[]" value="pdf" />
    <input type="text" class="search-field" name="s" placeholder="Search"
      value="<?php echo get_search_query(); ?>">
    <input type="submit" value="Search">
  </form>