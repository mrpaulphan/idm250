<?php
/*
 * Template Name: Post Listing
 *
 * This template will display all of my portfolio pieces
 *
 * @link https://codex.wordpress.org/Class_Reference/WP_Query
*/
$arg = [
  'post_type'     => 'post',
  'post_status'   => 'publish',
  'posts_per_page'=> 3
];
$posts = new WP_Query($arg);
get_header(); ?>

<body>
   <div id="blue_rectangle_mini"></div>
   <div id="archive_dot"></div>
   <div id="line_top"></div>
   
    <p class="h1"><?php the_title();?></p>
   <div class="archive_cont">
   <?php if ($posts->have_posts()): ?>
        <?php $i = 0; ?>
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
        <div class=“article_item article_item--<?php echo $i?>“>
       <?php if (has_post_thumbnail()): ?>
       <?php the_post_thumbnail();?>
                  <?php else: ?>
                    <img src="https://placehold.it/1280x720" alt="">
                  <?php endif; ?>
        <h4 class="archive_title"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>
        <p class="single_text"><?php the_excerpt(); ?></p>
        </div>
   </div>
   <?php $i++; ?>
   <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
            <p>
              <?php echo 'Sorry, no posts matched your criteria.'; ?>
            </p>
    <?php endif; ?>
    
</body>
<?php get_footer(); ?>