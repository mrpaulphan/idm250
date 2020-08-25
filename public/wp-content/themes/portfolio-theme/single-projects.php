<?php
/**
 * The template for displaying all project posts.
 *
 */
?>
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

        <div class="column column-sidebar">
          <?php if (get_field('project_client')): ?>
            <p>Client: <?php the_field('project_client') ?></p>
          <?php endif; ?>

          <p>Year: <?php the_date('Y') ?></p>

          <?php
            $taxonomy_name = 'technologies';
            $post_categories = wp_get_post_terms(get_the_ID(), $taxonomy_name);
          ?>
          <p>Tech Stack:
            <?php foreach ($post_categories as  $category) : // Loop through current categories and output it?>
                <a href="<?php echo get_term_link($category->term_id); ?>"><?php echo $category->name; ?></a>
            <?php endforeach; ?>
          </p>

     

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
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
