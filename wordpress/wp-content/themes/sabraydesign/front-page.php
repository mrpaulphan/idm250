<?php 
$arg = [
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'posts_per_page'=> 4
  ];
  $posts = new WP_Query($arg);

get_header();

?>
<body>
<div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
<div class="grid-item">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae aut totam eligendi dolore fugiat optio voluptatem itaque cupiditate tempore officia, pariatur quibusdam facilis nulla nostrum laudantium dicta iure quasi sed.</div>
  <div class="grid-item grid-item--width2">...</div>
  <div class="grid-item">...</div>
  ...
</div>

   <div id="pink_rectangle"></div>
    <div id="blue_rec_bot"></div>
    <div id="dot_grid"></div>
    <div id="line_x"></div>
    <div id="line_top"></div>
   <div class="profile">
       <h2><font color="#364357"><?php echo get_field('header_text_blue'); ?></font> <font color="#BABABA"><?php echo get_field('header_text_grey'); ?></font></h2>
   <div class="bio">
       <div class="bio_paragraph">
           <p><?php echo get_field('about_site_1'); ?></p>
       </div>
       <div class="bio_paragraph">
           <p><?php echo get_field('about_site_2'); ?></p>
       </div>
   </div>
   </div>
    <?php if ($posts->have_posts()) : ?>
    <?php $i = 1; ?>
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <?php if ($i == 1): ?>
            <div class="grid">
            <div class="grid_item" id="item_1">
            <?php the_post_thumbnail();?>
            </div>
        <div class="grid_item" id="item_1_text">
            <h3 class="num_1">0<?php echo $i; ?></h3>
           <h4 class="title_1"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>
           <div class="desc_1"><?php the_excerpt(); ?></div>
       </div>
            <?php elseif ($i == 2): ?>
            <div class="grid_item" id="item_2">
            <?php the_post_thumbnail();?>
           <a href="<?php the_permalink(); ?>"><h5 class="small_item"><font color="#BABABA">0<?php echo $i; ?> </font><font color="#364357"><?php the_title()?></font></h5></a>
           <div class="small_text"><?php the_excerpt(); ?></div>
            </div>
            <?php elseif ($i == 3): ?>
            <div class="grid_item" id="item_3">
            <?php the_post_thumbnail();?>
           <a href="<?php the_permalink(); ?>"><h5 class="small_item"><font color="#BABABA">0<?php echo $i; ?> </font><font color="#364357">ARTWORDS</font></h5></a>
           <div class="small_text"><?php the_excerpt(); ?></div>
            </div>
            <?php elseif ($i == 4): ?>
            <div class="grid_item" id="item_4">
            <?php the_post_thumbnail();?>
             </div>
            <div class="grid_item" id="item_4_text">
           <h3 class="num_2">0<?php echo $i; ?></h3>
           <h4 class="title_2"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h4>
           <div class="desc_2"><?php the_excerpt(); ?></div>
            </div>
            </div>
    <?php endif; ?>
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