<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>
<footer class="footer">
  <div class="footer-menu">
      <?php wp_nav_menu(['theme_location' => 'footer_menu']);?>
  </div>

  <div class="social-menu">
    <?php wp_nav_menu(['theme_location' => 'social_menu']);?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>