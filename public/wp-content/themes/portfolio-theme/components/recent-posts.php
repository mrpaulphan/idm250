<section>
  <h2>Most Recent Blogs</h2>
  <?php
    // The Query
    // Link: https://developer.wordpress.org/reference/classes/wp_query/#parameters

    $args = [
      'post_type'      => 'post',
      'post_status'    => 'publish',
      'posts_per_page' => 3
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

</section>