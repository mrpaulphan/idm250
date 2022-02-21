<?php
/* Template Name: Search Results */
get_header(); ?>
<?php
$s = get_search_query();
$args = [
    's' => $s
];
    // The Query
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    _e("<h2 style='font-weight:bold;color:#000'>Search Results for: " . get_query_var('s') . '</h2>');
    while ($the_query->have_posts()) {
        $the_query->the_post(); ?>
<li>
  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php
    }
} else {
    ?>
<h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
<div class="alert alert-info">
  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
</div>
<?php
} ?>

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
