<?php $image = get_field('hero_background'); ?>
<section class="hero" style="background-image: url(<?php echo $image['url']; ?>);">
  <div class="container hero__content">

    <?php if (get_field('hero_heading')): ?>
      <h1 class="hero__heading"><?php echo get_field('hero_heading')  ;?></h1>
    <?php endif; ?>


    <?php if (get_field('hero_intro')): ?>
      <p class="hero__body"><?php echo get_field('hero_intro') ;?></p>
    <?php endif; ?>

    <?php
      $cta = get_field('hero_cta');
      if ($cta): ?>
      <a class="btn hero__cta" target="<?php echo $cta['target'] ?>" href="<?php echo $cta['url'] ?>"><?php echo $cta['title']; ?></a>
    <?php endif; ?>

  </div>
</section>