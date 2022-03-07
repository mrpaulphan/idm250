<header class=" header-main">
  <div class="container header-main__inner">
    <h1>
      <img style="height: 50px;"
        src="<?php echo get_template_directory_uri() ?>/dist/images/logo.png"
        alt="Website Logo">
    </h1>
    <div class="header-main__content">
      <?php
    wp_nav_menu(['theme_location' => 'primary_menu']);
    get_template_part('components/search-form');
    ?>
    </div>
  </div>
</header>