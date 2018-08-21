<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * @link: https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>
		<?php
        // Show the selected front page content.
        if (have_posts()) :
            while (have_posts()) :
                the_post();
            endwhile;
        else :
            echo 'No Content';
        endif;
        ?>

<?php
get_footer();
