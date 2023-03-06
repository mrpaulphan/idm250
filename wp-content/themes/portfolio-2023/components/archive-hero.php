<?php
$title = get_the_archive_title();
// get the archive description
$description = get_the_archive_description();
?>
<div class="bg-white py-24 pb-16 px-6 sm:py-32 sm:pb-16 lg:px-8" data-component="archive-hero">
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
      <?php echo  $title ; ?>
    </h2>

    <?php if ($description) { ?>
    <p class="mt-6 text-lg leading-8 text-gray-600">
      <?php echo $description; ?>
    </p>
    <?php } ?>
  </div>
</div>