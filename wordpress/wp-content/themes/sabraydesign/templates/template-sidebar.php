<?php
/*
Template Name: General with Sidebar
*/
get_header(); ?>

<body>
      <p class="h1"><?php the_title()?></p>
    <div class="yellow_box"></div>
    <div id="sidebar">
        <?php get_sidebar();?>
    </div>
   <div id="pink_rectangle_middle"></div>
   <div id="gen_dot"></div>
   <div id="line_x"></div>
   <div id="line_top"></div>
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
</body>
<?php get_footer(); ?>