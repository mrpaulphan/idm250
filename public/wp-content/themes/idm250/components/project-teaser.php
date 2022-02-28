<?php
    // Has to be done in the loop so we have access to the featured image ID
    $featured_image = idm_get_asset_by_id(get_post_thumbnail_id());

    // Image doesn't exist, lets add a placeholder image to force user to upload an image.
    if (!$featured_image) {
        $featured_image['alt'] = 'Missing Image';
        $featured_image['src'] = '//via.placeholder.com/1058x705';
    };
?>
<div class="project-teaser">
  <img
    src="<?php echo $featured_image['src']; ?>"
    alt="<?php echo $featured_image['alt']; ?>">
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p><?php the_excerpt(); ?>
  </p>
</div>