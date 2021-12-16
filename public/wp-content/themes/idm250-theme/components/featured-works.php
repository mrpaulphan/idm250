<section>
    <div class="container">
      <h2>Featured Works</h2>
          <?php
          $featured_posts = get_field('featured_project');
          if ($featured_posts): ?>
              <?php foreach ($featured_posts as $featured_post):
                  $permalink = get_permalink($featured_post->ID);
                  $title = get_the_title($featured_post->ID);
                  $excerpt = get_the_excerpt($featured_post->ID);
                  $image = get_the_post_thumbnail($featured_post->ID);
                  ?>
                  <div class="media-block">
                    <div class="media-block__figure">
                      <?php echo $image; ?>
                    </div>
                    <div class="media-block__content">
                        <h3 class="media-block__heading"><?php echo $title ; ?></h3>
                        <p class="media-block__body"><?php echo  $excerpt; ?></p>
                        <a class="btn media-block__cta" href="<?php echo $permalink;?>">Learn More</a>
                    </div>
                  </div>
              <?php endforeach; ?>
          <?php endif; ?>

        <a class="btn media-block__cta" href="#">View All</a>
      </div>
  </section>