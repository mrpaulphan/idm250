<?php
/*
Template Name: Project Listing
*/
?>
<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container">
      <?php
        // The Query
        // Link: https://developer.wordpress.org/reference/classes/wp_query/#parameters

      $args = [
        'post_type'      => 'projects',
        'post_status'    => 'publish',
        'posts_per_page' => -1
      ];
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
        <h2><?php the_title(); ?></h2>
      <?php endwhile; ?>
      <?php else : ?>
      <h2>Sorry, no results</h2>
      <?php endif; ?>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>

