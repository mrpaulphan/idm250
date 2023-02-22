<header>
  <p>LOGO GOES HERE</p>
  <nav class="main-menu">
    <?php
      // @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
      wp_nav_menu(['theme_location' => 'primary-menu']);
    $menu = wp_get_nav_menu_items('primary-menu');
    echo '<pre>';
    var_dump($menu);
    echo '</pre>';
    ?>
  </nav>
</header>