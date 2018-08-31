<?php get_header();?>
<!-- banner Page
    ==========================================-->
<section id="home-banner" style="background-image: url(<?php echo get_field('hero_image'); ?>);">
    <div class="content">
        <div class="container" data-wow-duration="1s">
            <h1 class="wow fadeInUp">
                <?php echo get_field('hero_title'); ?>
            </h1>
            <h2 class="wow fadeInUp">
                <?php echo get_field('hero_subtitle'); ?>
            </h2>
            <p class="wow fadeInUp">
                <?php echo get_field('hero_intro'); ?>
            </p>
            <a class="btn btn-outline-default wow fadeInLeft" href="<?php echo get_field('hero_cta_url'); ?>">
                <?php echo get_field('hero_cta_label'); ?></a> <a class="btn btn-info chooser-btn wow fadeInRight" href="#">Start FREE Trial</a>
        </div>
    </div>
</section>

<!-- about us Page
    ==========================================-->
<section id="about-us-block">
    <div class="container">
        <div class="row">
            <!--section-title-->
            <div class="section-title text-center">
                <h2 class="wow fadeInUp">About us</h2>
                <p class="wow zoomIn">Alice wondered a little at this, but she was too much in awe of the Queen to disbelieve it. 'I'll try it when I go home,' she thought to herself.</p>
            </div>
            <!--/section-title-->

            <!--col-1-->
            <div class="col-md-4 col-sm-4 col-about-us wow fadeInLeft"> <i class="fa fa-clock-o"></i>
                <h4>History</h4>
                <p>This sounded a very good reason, and Alice was quite pleased to know it. 'I never thought of that before!' she said.</p>
            </div>
            <!--/col-1-->

            <!--col-2-->
            <div class="col-md-4 col-sm-4 col-about-us wow zoomIn"> <i class="fa fa-clock-o"></i>
                <h4>Expertise</h4>
                <p>She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday.</p>
            </div>
            <!--/col-2-->

            <!--col-3-->
            <div class="col-md-4 col-sm-4 col-about-us wow fadeInRight"> <i class="fa fa-clock-o"></i>
                <h4>Future plans</h4>
                <p>Looking cautiously round, to ascertain that they were not overheard, the two hags cowered nearer to the fire, and chuckled heartily.</p>
            </div>
            <!--/col-3-->

        </div>
    </div>
</section>
<!-- our works block
    ==========================================-->
<section id="our-work-block">
    <div class="container">
        <div class="row">
            <!--section-title-->
            <div class="section-title text-center wow fadeInUp">
                <h2>
                    <?php echo get_field('work_heading'); ?>
                </h2>
                <p>
                    <?php echo get_field('work_intro'); ?>
                </p>
            </div>
            <!--/section-title-->
            <div class="clearfix"></div>
            <div class="works">
                <?php
                /*
                *  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
                *  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
                *  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
                */

                $post_objects = get_field('work_featured_projects');

                if ($post_objects): ?>
                    <ul class="grid wow zoomIn">
                    <?php foreach ($post_objects as $post): // variable must be called $post (IMPORTANT)?>
                        <?php setup_postdata($post); ?>
                        <li>
                        <figure>
                            <?php the_post_thumbnail();?>
                            <figcaption>
                                <div class="caption-content">
                                    <h6><?php the_title(); ?></h6>
                                    <a href="#">Design</a> <a href="#">brand</a>
                                    <ul class="work-more">
                                        <li><a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </figcaption>
                        </figure>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly?>
                <?php endif;?>

                <div class="clearfix"></div>
                <a href="portfolio.html" class="more-links">View All Projects</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>