<?php
/**
 * This component is used to display the recent 3 projects.
 * The projects are defined in the custom post type "projects"
 * We use the WP_Query class to get the posts.
 * @link https://developer.wordpress.org/reference/classes/wp_query/
 */

$args = [
    'post_type' => 'projects', // This is the name of the custom post type we created
    'posts_per_page' => 3,
    'order' => 'DESC',
    'orderby' => 'date',
];
$project_posts_query = new WP_Query($args);

?>
<div class="bg-white py-24 sm:py-32" data-component="recent-projects">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl text-center">
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Recent Projects</h2>
    </div>
    <div
      class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <?php
        // Check if there are any posts
        if ($project_posts_query->have_posts()) {
            // Loop through the posts
            while ($project_posts_query->have_posts()) {
                // This is where the post's data is set up
                $project_posts_query->the_post();
                // This is where we include the blog card component
                get_template_part('components/project-card');
            }
            // Restore original Post Data
            wp_reset_postdata();
        } else {
            echo '<p>Sorry, no posts matched your criteria.</p>';
        }?>
    </div>
  </div>
</div>