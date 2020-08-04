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
<<<<<<< HEAD


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
=======
  <div class="container">
    <h1 class="archive__title"><?php echo single_term_title(); ?></h1>

    <div class="archive__desc">
      <?php echo term_description();?>
    </div>

    <div class="archive__posts split-3">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article class="article-block column">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
              <h2><?php the_title(); ?></h2>
            </a>
          </article>
        <?php endwhile; ?>
      <?php else: ?>
        <h2>Sorry, no post found</h2>
      <?php endif; ?>
    </div>

  </div>
</main>

>>>>>>> @{-1}
<?php get_footer(); ?>
