<?php
// This value comes from settings > general under "Site Title"
$site_title = bloginfo('name');
$separator = ' | ';
$page_title = is_home() ? 'Home' : wp_title('');
$meta_title = $page_title . $separator . $site_title;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $meta_title; ?></title>

  <?php
  // Link - https://developer.wordpress.org/reference/functions/wp_head/
  // Plugins and WordPress core use this function to insert crucial elements into your document (e.g., scripts, styles, and meta tags).
  // Always put wp_head() just before the closing tag of your theme
  wp_head();
  ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="container header__content">
      <a href="<?php echo get_site_url(); ?>">IDM250 - CMS</a>
      <?php
        // Registered this menu in functions.php via register_theme_sidebar()
        wp_nav_menu(['theme_location' => 'primary_menu']);?>
    </div>
  </header>
  <!-- Main Content -->
