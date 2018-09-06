<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>
        <?php the_title()?> |  <?php bloginfo('name'); ?></title>


    <h1>
        <a href="<?php echo home_url(); ?> ">
            <font color="#364357">SB</font>
            <font color="#BABABA">Design</font>
        </a>
    </h1>

    <div id="social">
        <a href="https://twitter.com/snibsi" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/snibeti/" class="fa fa-instagram"></a>
        <a href="https://dribbble.com/Snibeti" class="fa fa-dribbble"></a>
        <a href="https://www.linkedin.com/in/sarah-bray-0b910b11b" class="fa fa-linkedin"></a>
        <?php get_search_form(); ?>
    </div>

    <?php 
            wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
                'menu_id'      => 'nav',
                'menu_class'   => 'main',
            ]);
        ?>

    <?php wp_head(); ?>
</head>