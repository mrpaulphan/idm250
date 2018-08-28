<?php
get_header(); ?>
<!--blog body-->
<div id="Blog-post"> 
  <!-- banner Page
    ==========================================-->
    
  <header class="entry-header" style="background-image: url(<?php echo get_template_directory_uri();?>/dist/img/s-1.jpg);">
    <div class="content  wow fadeInUp">
      <div class="container">
        <h1><?php the_title();?></h1>
    </div>
  </header>
  <div class="container">
    <div class="row wow fadeInUp"> 
      <?php if (have_posts()): ?>
          <article class="post">   
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
          </article>
        <?php else: ?>
          <h2>Sorry, No Post Found</h2>
        <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
