<?php
$currentPostId = get_the_id();
$terms = get_the_terms($currentPostId, 'project-categories');
$total_category_count = count($terms);

if ($terms) {
    foreach ($terms as $key => $term) {
        $taxonomy_url = get_term_link($term->term_id);
        // Only show comma if not last item in loop
        $comma = $key < $total_category_count - 1 ? ', ' : '';
        echo "<a class='text-teal-600' href='{$taxonomy_url}'>{$term->name}$comma</a>";
    }
}