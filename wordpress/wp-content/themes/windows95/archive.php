<?php 
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<?php echo get_the_archive_title(); ?>

<?php if (have_posts()): ?>
    <?php // TO SHOW THE PAGE CONTENTS?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_title(); ?>
    <?php endwhile; //resetting the page loop?>
    <?php wp_reset_query(); //resetting the page query?>
<?php else: ?>
    <h2>Sorry, No Post Found</h2>
<?php endif; ?>

<h2>Archives by Month:</h2>
<ul>
    <?php
            $arg = [
                'type' => 'monthly'
            ];
            wp_get_archives($arg);
        ?>
</ul>

<h2>Archives by Year:</h2>
<ul>
    <?php
            $arg = [
                'type' => 'yearly'
            ];
            wp_get_archives($arg);
        ?>
</ul>
<?php get_footer();
