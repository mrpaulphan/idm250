<?php
/**
 * If present, this will be used as your frontpage
 * @link https://developer.wordpress.org/themes/functionality/custom-front-page-templates/#custom-site-front-page-template
 */

get_header();
// https://developer.wordpress.org/reference/classes/wp_query/
$arg = [
    'post_type' => 'idm-projects',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'order' => 'DESC'
];
$project_query = new WP_Query($arg);

?>

?>

<section class="hero">
  <h1>This is the home page hero</h1>
</section>
<section class="featured-works">
  <h2>Featured Works</h2>
  <div class="works">
    <?php
    while ($project_query->have_posts()) : $project_query->the_post(); ?>
    <div class="works__column">
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
<?php get_footer();
