<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>
    <!-- End Main Content -->
    <footer class="footer">
      <div class="footer-menu container">
          <span>&copy; <?php echo date('Y'); // This will display the current year always. No need to manually update?></span>
          <?php
          // Registered this menu in functions.php via register_theme_sidebar()
          wp_nav_menu(['theme_location' => 'footer_menu']);?>
      </div>

      <div class="social-menu container">
        <?php
            // Registered this menu in functions.php via register_theme_sidebar()
            wp_nav_menu(['theme_location' => 'social_menu']);?>
      </div>
    </footer>
      <?php
        // Link - https://developer.wordpress.org/reference/functions/wp_footer/
        wp_footer();
      ?>
  </body>
</html>