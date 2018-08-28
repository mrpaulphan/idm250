<?php 
$searched_string = $_GET['s'];
get_header(); ?>
<br>        
<br>        
<br>        
<br>        
<br>        
<br>        
<br>        
<br>        
<div class="container">

<br>
<br>
<br>
<h1>You results for .... "<?php echo $searched_string; ?>"</h1>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <!--article-->
    <article class="col-md-12 wow fadeInUp">
        <header class="entry-header">
            <span class="date-article">
                    <i class="fa fa-calendar-o"></i><?php the_date();?></span>
            <a href="<?php the_permalink(); ?>">
                <?php
                  // Check to see if the post has a featured image
                  if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail();?>
                    <?php else: ?>
                    <img src="https://placehold.it/1280x720" alt="">
                    <?php endif; ?>
            </a>
            <span class="byline">
                    <span class="author vcard">
                      <?php 
                        // Get categories associated with this post
                        $categories = get_the_category();
                        ?>
                        <p>
                          <i class="fa fa-folder-o"></i>
                          <?php foreach ($categories as $category): ?>
                            <a href="<?php echo get_category_link($category); ?>"><?php echo $category->name ?></a>
                          <?php endforeach; ?>
                        </p>
                        
                      <a href="<?php the_permalink(); ?>">
                        <i class="fa fa-user-o"></i> Rijo</a>
                    </span>
            </span>
            <a href="<?php the_permalink(); ?>">
                <h2>
                    <?php the_title()?>
                </h2>
            </a>
        </header>
        <p>
            <?php the_excerpt(); ?>
        </p>
        <a class="btn  readmore-btn" href="#">READ MORE</a>
    </article>
    <!--/article-->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else : ?>
    <p>
        <?php echo 'Sorry, no posts matched your criteria.'; ?>
    </p>
    <?php endif; ?>





</div>

<?php get_footer(); ?>