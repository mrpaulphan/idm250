<?php get_header();
$title = get_the_archive_title();
$current_page_number = get_query_var('paged') ? get_query_var('paged') : 1;
$arg = [
    'post_type' => 'post',
    'posts_per_page' => -1,
    'paged' => $current_page_number];
$wp_query = new WP_Query($arg);

//
$description = get_the_archive_description();

echo $title;
// loop through $wp_query and output the posts
if ($wp_query->have_posts()) {
    while ($wp_query->have_posts()) {
        $wp_query->the_post();
        get_template_part('components/card');
    }
}
?>




<?php get_footer(); ?>