<?php get_header(); ?>

This single.php


<?php while (have_posts()) : the_post(); ?>
<div class="">
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
