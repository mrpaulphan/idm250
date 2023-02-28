<?php get_header(); ?>
<header class="flex flex-col">
  <div class="">
    <h1> <?php echo get_the_title(); ?></h1>
    <div><?php echo get_the_date() ?> |
      <?php get_template_part('components/project-categories-list'); ?>
    </div>
  </div>
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Hero Image">
  <div>
  </div>
</header>
<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>