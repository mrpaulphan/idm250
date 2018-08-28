<?php 
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?>
<br>
<br>
<br>
<br>
<br>
<div class="container">

<h1><?php echo get_the_archive_title(); ?></h1>


Archives by month
<ul>    
    <?php
        $arg = [
            'type' => 'monthly'
        ];
        wp_get_archives($arg);
    ?>
</ul>
Archives by Year
<ul>    
    <?php
        $arg = [
            'type' => 'yearly'
        ];
        wp_get_archives($arg);
    ?>
</ul>
Archives by categories
<ul>    
    <?php
        $categories = get_categories();
        foreach ($categories as $category): ?>
        <li><a href="<?php echo get_category_link($category); ?>"><?php echo $category->name ?></a></li>
        <?php endforeach; ?>
</ul>

<hr>

<?php if (have_posts()): ?>
    <article class="post">   
    <?php // TO SHOW THE PAGE CONTENTS?>
    <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <?php the_title(); ?> 
        <?php the_excerpt(); ?> 
    <?php endwhile; //resetting the page loop?>
    <?php wp_reset_query(); //resetting the page query?>
    </article>
<?php else: ?>
    <h2>Sorry, No Post Found</h2>
<?php endif; ?>




</div>
<?php get_footer(); ?>
