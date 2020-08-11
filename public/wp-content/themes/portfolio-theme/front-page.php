<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 * Set this in settings > reading > static page
 *
 */
get_header();?>
  <?php get_template_part('components/hero'); ?>
  <?php get_template_part('components/featured-works'); ?>
  <?php get_template_part('components/recent-posts'); ?>
<?php get_footer(); ?>
