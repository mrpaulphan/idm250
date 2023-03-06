<header class="flex flex-col mt-10">
  <div class="text-center">
    <h1
      class="mt-2 mb-3 text-3xl font-semibold tracking-tight text-center lg:leading-snug text-brand-primary lg:text-4xl ">
      <?php echo get_the_title(); ?>
    </h1>
    <div class="flex justify-center items-center"><span
        class="mr-2"><?php echo get_the_date(); ?></span>
      <?php get_template_part('components/blog-categories-list'); ?>
    </div>
  </div>
  <div class="mt-10 hero"
    style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
  </div>

</header>