<?php get_header();?>

<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <form action="/" method="get">
      <label for="search">Search</label>
      <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
      <input type="image" alt="Search" src="<?php bloginfo('template_url'); ?>/images/search.png" />
    </form>
		<?php if (have_posts()) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf(__('Search Results for: %s', '_mbbasetheme'), '<span>' . get_search_query() . '</span>'); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while (have_posts()) : the_post(); ?>
      
        <?php
            the_title();

                ?>

			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part('content', 'none'); ?>

		<?php endif; ?>

		</main><!-- #main -->
  </section><!-- #primary -->
<?php get_footer(); ?>
