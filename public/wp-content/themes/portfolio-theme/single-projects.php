<?php
/**
<<<<<<< HEAD
 * The template for displaying all single project posts.
=======
 * The template for displaying all project posts.
>>>>>>> @{-1}
 *
 */
?>
<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container split-sidebar">
        <!-- Main Content -->
        <div class="column column-main">
<<<<<<< HEAD
          <h1 class="post_title js-blog-heading"><?php the_title(); ?></h1>

          <?php the_post_thumbnail(); ?>

          <p class="post_meta"><?php the_date('n/j/Y') ?> | <?php  the_category(); ?></p>

          <div class="intro">
            <?php the_excerpt();?>
          </div>

          <div class="page-builder">
            <?php the_content(); ?>
          </div>
            <?php the_tags(); ?>
        </div>

        <?php get_sidebar(); ?>

=======
          <h1 class="post_title"><?php the_title(); ?></h1>
          <?php the_post_thumbnail(); ?>
          <div class="page-builder">
            <?php the_content(); ?>
          </div>
        </div>

        <div class="column column-sidebar">
          <?php if (get_field('project_client')): ?>
            <p>Client: <?php the_field('project_client') ?></p>
          <?php endif; ?>

          <p>Year: <?php the_date('Y') ?></p>

          <?php if (get_field('technology')): ?>
            <p>Tech Stack: <?php the_field('technology') ?></p>
          <?php endif; ?>

          <?php
            $link = get_field('project_link');
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
            <p>Link: <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></p>
          <?php endif; ?>

        </div>
>>>>>>> @{-1}
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
