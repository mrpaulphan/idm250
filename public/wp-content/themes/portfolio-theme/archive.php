<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header();?>
<main class="main-content">


<div class="container">
<?php $term_description = term_description();
echo $term_description;
?>
<?php if (have_posts()) : ?>
    <h1><?php single_term_title(); ?></h1>
      <?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
        <div class="post-block">
          <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail(); ?>
            <h3><?php the_title(); ?></h3>
          </a>
        </div>
			<?php endwhile; ?>
      <?php else : ?>
        <h2>Sorry there are no post</h2>
      <?php endif; ?>
      </div>
  </main>
<?php get_footer(); ?>
