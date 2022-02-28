<?php
// https://developer.wordpress.org/reference/classes/wp_query/

$arg = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'order' => 'DESC',

];
$project_query = new WP_Query($arg);

?>

<section class="featured-works">
  <h2>Recent Posts</h2>
  <div class="works">
    <?php
    while ($project_query->have_posts()) : $project_query->the_post(); ?>
    <?php
    // Has to be done in the loop so we have access to the featured image ID
    $featured_image = idm_get_asset_by_id(get_post_thumbnail_id());

    if (!$featured_image) {
        $featured_image['alt'] = 'Missing Image';
        $featured_image['src'] = '//via.placeholder.com/600x450';
    };
    ?>
    <div class="recent-work-teaser">
      <img class="recent-work-teaser__image"
        src="<?php echo $featured_image['src']; ?>"
        alt="<?php echo $featured_image['alt']; ?>">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <p><?php the_excerpt(); ?>
      </p>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();

  ?>
  </div>
</section>