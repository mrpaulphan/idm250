<?php
/*
Template Name: Small Page
*/
get_header(); ?>
<div id="pink_rectangle"></div>
<div id="dot_grid"></div>
<div id="line_top"></div>
<p class="h1"><?php the_title()?></p>
<div class="wrapper">
<?php if (have_posts()): ?>
   <?php /* Start the Loop */ ?>
   <?php while(have_posts()) : the_post(); ?>
   <?php the_content();?>
   <?php endwhile; //resetting the page loop?>
   <?php wp_reset_query(); ?>
   
   <?php else: ?>
         <h2>Sorry, No Post Found</h2>
   <?php endif; ?>
</div>


<?php get_footer(); ?>