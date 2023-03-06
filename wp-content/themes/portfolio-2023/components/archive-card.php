<a href="<?php echo get_the_permalink(); ?>" class="group"
    data-component="archive-card">
    <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
        <img src="<?php echo get_the_post_thumbnail_url()?>"
            alt="Hand holding black machined steel mechanical pencil with brass tip and top."
            class="h-full w-full object-cover object-center group-hover:opacity-75">
    </div>
    <h3 class="mt-4 text-m text-gray-700">
        <?php echo get_the_title(); ?>
    </h3>

</a>