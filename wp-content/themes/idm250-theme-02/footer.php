<footer>
  <p>&copy; <?php echo date('Y'); ?>
    <?php bloginfo('name'); ?></p>
  <?php wp_nav_menu(['theme_location' => 'footer-menu']); ?>
</footer>
<?php // https://developer.wordpress.org/reference/functions/wp_footer/?>
<?php wp_footer(); ?>
</body>

</html>