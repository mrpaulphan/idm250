<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
          <h1 class="post_title"><?php the_title(); ?></h1>
          <?php the_post_thumbnail(); ?>
          <div class="page-builder">
            <?php the_content(); ?>
          </div>
        </div>

        <?php get_sidebar(); ?>

    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
