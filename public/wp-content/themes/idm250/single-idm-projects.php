<?php get_header(); ?>

This is the single-idm-projects file
<?php while (have_posts()) : the_post(); ?>
<div class="single-projects">
  <main>
    <h1 class=""><?php the_title(); ?>
    </h1>
    <div class="">
      <!-- start content -->
      <?php the_content(); ?>
      <!-- end content -->
    </div>
  </main>
  <aside>
    <p>Project Year: <?php echo get_field('project_year'); ?>
    </p>
    <p>Client: <?php the_field('project_client'); ?>
    </p>
    <p>Services: CMS Build, Design, etc...</p>
  </aside>
</div>
<?php endwhile; ?>

<?php get_footer();
