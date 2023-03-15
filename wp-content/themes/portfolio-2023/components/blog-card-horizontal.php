<article class="relative isolate flex flex-col gap-8 lg:flex-row">
  <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>"
      alt="<?php echo get_the_title(); ?> Featured Image"
      class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
    <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
  </div>
  <div>
    <div class="flex items-center gap-x-4 text-xs">
      <time datetime="<?php echo get_the_date(); ?>"
        class="text-gray-500"><?php echo get_the_date(); ?></time>
      <?php get_template_part('components/blog-categories-list'); ?>
    </div>
    <div class="group relative max-w-xl">
      <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
        <a href="<?php echo get_the_permalink(); ?>">
          <span class="absolute inset-0"></span>
          <?php echo get_the_title(); ?>
        </a>
      </h3>
      <?php if (has_excerpt()) : ?>
      <p class="mt-5 text-sm leading-6 text-gray-600">
        <?php get_the_excerpt(); ?>
      </p>
      <?php endif; ?>
    </div>
    <div class="mt-6 flex border-t border-gray-900/5 pt-6">
      <div class="relative flex items-center gap-x-4">
        <?php
        $author_id = get_the_author_meta('ID');
    $author_image_size = 32;
    $author_args = [
        'class' => 'h-10 w-10 rounded-full bg-gray-50'
    ];
    $author_image_html = get_avatar($author_id, $author_image_size, '', '', $author_args);
    echo $author_image_html ?>
        <div class="text-sm leading-6">
          <p class="font-semibold text-gray-900">
            <a href="<?php echo get_the_permalink(); ?>">
              <span class="absolute inset-0"></span>
              <?php echo get_the_author_meta('user_nicename'); ?>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</article>