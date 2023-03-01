<?php
if (have_posts()) {
    // Load posts loop.
    while (have_posts()) {
        the_post();
        get_template_part('components/card');
    }
} else {
    echo 'no posts found';
}
