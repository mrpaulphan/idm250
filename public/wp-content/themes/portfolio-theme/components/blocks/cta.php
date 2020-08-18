<?php

/**
 * CTA Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$heading = get_field('cta_heading') ?: 'Heading is missing here...';
$body = get_field('cta_body') ?: 'Body is missing here...';
$button = get_field('button') ?: false;
?>

<div class="block-cta">
  <?php if ($heading): ?>
    <h3><?php echo $heading; ?></h3>
  <?php endif; ?>

  <?php if ($body): ?>
    <p><?php echo $body; ?></p>
    <?php endif; ?>

  <?php if ($button): ?>
    <a href="<?php echo $button['url'];?>" target="<?php echo $button['target'];?>"><?php echo $button['title'];?></a>
  <?php endif; ?>
</div>