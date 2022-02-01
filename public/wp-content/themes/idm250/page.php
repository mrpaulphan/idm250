<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="">
  <h1 class=""><?php the_title(); ?>
  </h1>

  <?php the_post_thumbnail(); ?>

  <div class="">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();
