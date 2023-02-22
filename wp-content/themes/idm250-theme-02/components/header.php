<header>
  <img class="logo" src="https://static.cdnlogo.com/logos/c/18/ChatGPT_800x800.png" alt="">
  <?php
      // There are two ways to get the menu items:
      // 1. wp_nav_menu(['theme_location' => 'primary-menu']); @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
      // 2. get_theme_menu() which is a custom function I made to get the menu items. You can then loop through it and write your own markup
    $menu = get_theme_menu('primary-menu');
  if ($menu) {?>
  <nav>
    <?php
    foreach ($menu as $menu_item) {
        echo "<a href='{$menu_item->url}'>{$menu_item->title}</a>";
    } ?>
  </nav>
  <?php } ?>
</header>