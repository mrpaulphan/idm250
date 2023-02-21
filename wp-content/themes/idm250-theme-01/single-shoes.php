<?php get_header(); ?>
Custom Post Type = Shoes
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part('components/content'); ?>
</article>
<?php get_footer(); ?>