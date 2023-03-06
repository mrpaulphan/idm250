<div class="relative bg-white" data-component="hero-split-with-image">
  <div class="mx-auto max-w-7xl">
    <div class="relative z-10 lg:w-full lg:max-w-2xl">
      <svg class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-white lg:block"
        viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="0,0 90,0 50,100 0,100" />
      </svg>
      <div class="relative py-32 px-6 sm:py-40 lg:py-56 lg:px-8 lg:pr-0">
        <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
            <?php echo get_the_title(); ?>
          </h1>
          <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure
            qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-gray-50 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="aspect-[3/2] object-cover lg:aspect-auto lg:h-full lg:w-full"
      src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
  </div>
</div>