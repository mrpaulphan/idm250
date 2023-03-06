<?php
/**
 * This component is used to display the recent 3 blog posts.
 * We use the WP_Query class to get the posts.
 * @link https://developer.wordpress.org/reference/classes/wp_query/
 */

$args = [
    'post_type' => 'post',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'date',
];
$blog_posts_query = new WP_Query($args);

?>
<div class="bg-white py-24 sm:py-32" data-component="recent-blog">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
    </div>
    <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-y-20 gap-x-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <?php
        // The Loop
        if ($blog_posts_query->have_posts()) {
            while ($blog_posts_query->have_posts()) {
                // This is where the post's data is set up
                $blog_posts_query->the_post();
                get_template_part('components/blog-card');
            }
            // Restore original Post Data
            wp_reset_postdata();
        } else {
            echo '<p>Sorry, no posts matched your criteria.</p>';
        }?>
    </div>
  </div>
</div>