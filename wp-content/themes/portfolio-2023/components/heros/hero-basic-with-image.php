<header>
  <h1> <?php echo get_the_title(); ?></h1>
  <p><?php echo  get_the_date() ?>
    |<?php get_template_part('components/blog-categories-list'); ?>
  </p>
  <div>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>"
      alt="Hero Image">
  </div>
</header>