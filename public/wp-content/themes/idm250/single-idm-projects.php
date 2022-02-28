<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="single-projects container">
  <main>
    <h1 class=""><?php the_title(); ?>
    </h1>
    <div style="margin-left: 20px;">
      <?php
        $terms = get_the_terms(get_the_ID(), 'idm-project-categories');
        if ($terms) {
            foreach ($terms as $term) {
                echo $term->name . ',';
            }
        }
    ?>
    </div>
    <div class="editor">
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
