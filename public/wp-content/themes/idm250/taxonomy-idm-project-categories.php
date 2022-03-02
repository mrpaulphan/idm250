<?php
get_header(); ?>

<h1 class="container"><?php the_archive_title(); ?>
</h1>
<br>
<div class="container">
  <div class="grid-4">
    <?php
    while (have_posts()) : the_post();
      get_template_part('components/project-teaser');
    endwhile;
    the_posts_pagination(
        [
            'mid_size' => 2,
            'prev_text' => 'Previous',
            'next_text' => 'Next'
        ]
    );
  ?>
  </div>
</div>
<?php get_footer();
