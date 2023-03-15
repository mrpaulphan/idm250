<?php
/* Template Name: Narrow */
get_header();
?>
<div class="bg-gray-900 py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0">
      <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
        <?php echo get_the_title(); ?>
      </h2>

    </div>
  </div>
</div>

<div class="relative mx-auto  max-w-7xl px-4 sm:px-6 lg:px-8 flex  justify-center sm:px-2 lg:px-8 xl:px-12"
  data-component="">
  <div class="min-w-0 max-w-2xl flex-auto px-4 py-16 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16">
    <?php get_template_part('components/content'); ?>
  </div>

</div>
<?php get_footer(); ?>