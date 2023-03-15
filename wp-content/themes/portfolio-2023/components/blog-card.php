<?php
/**
 * This component is used to display a single blog post card.
 * It should be used inside a loop.
 */
?>
<article class="flex flex-col items-start justify-between" data-component="blog-card">
  <div class="relative w-full">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>"
      alt="<?php echo get_the_title(); ?> Featured Image"
      class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
  </div>
  <div class="max-w-xl">
    <div class="mt-8 flex items-center gap-x-4 text-xs">
      <time datetime="<?php echo get_the_date(); ?>"
        class="text-gray-500"><?php echo get_the_date(); ?></time>
      <?php get_template_part('components/blog-categories-list'); ?>

    </div>
    <div class="group relative">
      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
        <a href="<?php echo get_the_permalink(); ?>">
          <span class="absolute inset-0"></span>
          <?php echo get_the_title(); ?>
        </a>
      </h3>
      <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">
        <?php echo get_the_excerpt(); ?>
      </p>
    </div>
  </div>
</article>