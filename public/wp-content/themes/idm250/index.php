<?php
/**
 * This is the fallback page for everything. This should a simple page just like page.php
 */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="container">
  <h1 class=""><?php the_title(); ?>
  </h1>

  <div class="">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();
