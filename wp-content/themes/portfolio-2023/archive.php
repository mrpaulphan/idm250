<?php
 get_header();
 $title = get_the_archive_title();
 // get the archive description
 $description = get_the_archive_description();
 ?>
<div class="center">
    <h1> <?php echo $title; ?> </h1>
    <p> <?php echo $description; ?> </p>
</div>
<div class="flex flex-wrap">
    <?php get_template_part('components/content-archive'); ?>
</div>

<?php get_footer(); ?>