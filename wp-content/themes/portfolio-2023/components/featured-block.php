<!-- Start ./components/featured-block -->
<section aria-labelledby="social-impact-heading" class="mx-auto max-w-7xl px-4 pt-24 sm:px-6 sm:pt-32 lg:px-8">
  <div class="relative overflow-hidden rounded-lg">
    <div class="absolute inset-0">
      <?php
      $image = get_field('cta_background_image');
      if(!empty($image)): ?>
      <img src="<?php echo esc_url($image['url']); ?>" class=" h-full w-full object-cover object-center"
        alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
    </div>
    <div class="relative bg-gray-900 bg-opacity-75 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
      <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
        <h2 id="social-impact-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
          <?php echo get_field('cta_heading'); ?>
        </h2>
        <p class="mt-3 text-xl text-white">
          <?php echo get_field('cta_description'); ?>
        </p>
        <?php
        $link = get_field('cta_link');
      if($link):
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
        <a class="mt-8 block w-full rounded-md border border-transparent bg-white py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto"
          href="<?php echo esc_url($link_url); ?>"
          target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
<!-- End ./components/featured-block -->