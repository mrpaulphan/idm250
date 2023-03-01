<header class="flex flex-col mt-10">
  <div class="">
    <h1 class="text-2xl font-bold leading-7 sm:truncate sm:text-3xl sm:tracking-tight">
      <?php echo get_the_title(); ?>
    </h1>
    <div><?php echo get_the_date(); ?> |
      <?php get_template_part('components/blog-categories-list'); ?>
    </div>
  </div>
  <div class="mt-10 hero"
    style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
  </div>

</header>