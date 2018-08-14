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


  <!-- banner Page
    ==========================================-->

  <header class="entry-header" style="background-image: url(<?php echo get_template_directory_uri();?>/dist/img/s-1.jpg);">
    <div class="content  wow fadeInUp">
      <div class="container">
        <h1>
          <?php the_title();?>
        </h1>
      </div>
  </header>
  <!--blog body-->
  <div id="Blog-post">
    <div class="container">
      <div class="row">
        <!--blog posts container-->
        <div class="col-md-8 col-sm-12 single-post">

          <?php if ($posts->have_posts()) : ?>
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
              <!--article-->
              <article class="col-md-12 wow fadeInUp">
                <header class="entry-header">
                  <span class="date-article">
                    <i class="fa fa-calendar-o"></i> JULY 13 2017</span>
                  <a href="<?php the_permalink(); ?>">
                    <img src="dist/img/a-1.jpg" class="img-responsive">
                  </a>
                  <span class="byline">
                    <span class="author vcard">
                      <a href="<?php the_permalink(); ?>">
                        <i class="fa fa-folder-o"></i> Business &bull; Industry</a>
                      <a href="<?php the_permalink(); ?>">
                        <i class="fa fa-user-o"></i> Rijo</a>
                    </span>
                  </span>
                  <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title()?></h2>
                  </a>
                </header>
                <p>Nullam consequat sed purus ut laoreet. Etiam fringilla placerat magna a aliquam. Mauris mollis tristique. In
                  ac interdum ipsum. Phasellus in accumsan metus.</p>
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

          <div class="clearfix"></div>
        </div>
        <!--blog posts container-->

        <!--aside-->
        <aside class="col-md-4 col-sm-12">
          <?php get_sidebar();?>
        </aside>
        <!--aside-->

        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>