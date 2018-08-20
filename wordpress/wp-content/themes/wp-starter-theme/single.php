<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header(); ?>
<?php
/* Start the Loop */
while (have_posts()) :
the_title();
the_post();
the_content();
$categories = get_categories();
foreach ($catgories as $key => $category) {
    echo $category->name;
    echo $category->id;
}
endwhile; // End of the loop.
?>

	
<?php
get_footer();
