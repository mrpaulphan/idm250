<?php get_header(); ?>
<?php
 $args = [
     's' => $_GET['s'],
     'post_type' => $_GET['post_type'],
 ];
 $search_query = new WP_Query($args)
?>
<?php
get_template_part(
    'components/heros/home-hero',
    null,
    [
        'heading' => 'Search results for "' . $_GET['s'] . '"',
        'body' => ''
    ]
);
?>

<div class="container search-results">
  <?php
  if ($search_query->have_posts()) {
      while ($search_query->have_posts()) : $search_query->the_post();
      get_template_part('components/project-teaser');
      endwhile;
      wp_reset_postdata();
  } else {
      // no results
      echo '<p>Sorry, there are no results</p>';
  }

?>

</div>


<?php get_footer();
