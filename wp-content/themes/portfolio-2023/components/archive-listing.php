<?php
/**
 * This component is used to display the archive listing.
 * To set the number of posts per page, go to Settings > Reading > Blog pages show at most
 */
?>
<div class="bg-white" data-component="archive-listing">
  <div class="mx-auto max-w-2xl py-8 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
      <?php
        if (have_posts()) {
            // Load posts loop.
            while (have_posts()) {
                the_post();
                get_template_part('components/archive-card');
            }
        } else {
            echo 'no posts found';
        }
?>

    </div>
  </div>
</div>