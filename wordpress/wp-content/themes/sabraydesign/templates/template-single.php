<?php
/*
 * Template Name: Individual Post
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>

<body>
  
  <div id="blue_rectangle"></div>
  <div id="waves"></div>
  <div id="single_dots"></div>
  <div id="line_top"></div>

 <p class="main_num"><?php echo get_field('post_number'); ?></p>
 <p class="main_title"><?php echo get_field('post_title'); ?></p>
  <div class="single_grid">
      <div class="sgrid_item">
         <p class="subtitle"><?php echo get_field('post_subtitle'); ?></p>
         <div class="single_text"><?php echo get_field('first_image_subtitle'); ?></div>
      </div>
      <div class="sgrid_item">
          <img src="<?php echo get_field('first_image'); ?>" alt="">
      </div>
      <div class="sgrid_item">
      <div class="single_text"><?php echo get_field('second_image_subtitle'); ?></div>
      </div>
      <div class="sgrid_item">
         <img src="<?php echo get_field('second_image'); ?>" alt=""> 
      </div>
      <div class="sgrid_item">
          <div class="single_text"><p class="single_text"><?php echo get_field('third_image_subtitle'); ?></div>
      </div>
      <div class="sgrid_item">
          <img src="<?php echo get_field('third_image'); ?>" alt="">
      </div>
  </div>
</body>




 <?php get_footer(); ?>