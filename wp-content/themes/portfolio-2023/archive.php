<?php
 get_header();
 $title = get_the_archive_title();
 // Get the current page number from the URL. Example ?paged=2
 if (get_query_var('paged')) {
     $current_page_number = get_query_var('paged');
 } else {
     $current_page_number = 1;
 }
 $arg = [
     'post_type' => 'post', // the post type
     'posts_per_page' => 10, // number of posts per page
     'paged' => $current_page_number //
 ];

 $wp_query = new WP_Query($arg);
 $description = get_the_archive_description();
 // loop through $wp_query and output the posts
 if ($wp_query->have_posts()) {
     while ($wp_query->have_posts()) {
         $wp_query->the_post();
         get_template_part('components/card');
     }
 }
 ?>


<?php get_footer(); ?>