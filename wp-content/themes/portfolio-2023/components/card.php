<div class="flex">
  <?php if (get_the_post_thumbnail_url()) {
      echo "<div class='w-100'>
      <img src='" . get_the_post_thumbnail_url() . "' alt='Hero Image'>
      </div>";
  } ?>
  <div>
    <h1> <?php echo get_the_title(); ?></h1>
    <p><?php echo get_the_excerpt(); ?></p>
  </div>
</div>