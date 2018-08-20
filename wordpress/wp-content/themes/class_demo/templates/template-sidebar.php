<?php
/*
Template Name: General with Sidebar
*/

get_header(); ?>


<!-- banner Page
    ==========================================-->
    <header class="entry-header" style="background-image: url(<?php echo get_template_directory_uri();?>/dist/img/s-1.jpg);">
    <div class="content  wow fadeInUp">
      <div class="container">
        <h1><?php the_title();?></h1>
    </div>
  </header>

<!--blog body-->
<div id="Blog-post">
  <div class="container">
    <div class="row"> 
      <!--blog posts container-->
      <div class="col-md-8 col-sm-12 single-post"> 
        
        <!--article-->
        <article class="col-md-12 wow fadeInUp">
          <header class="entry-header"> <span class="date-article"><i class="fa fa-calendar-o"></i> JULY 13 2017</span> <a href="blog-post.html"><img src="dist/img/a-1.jpg" class="img-responsive"></a> <span class="byline"><span class="author vcard"><a href="#"><i class="fa fa-folder-o"></i> Business &bull; Industry</a><a href="#"><i class="fa fa-user-o"></i> Rijo</a> </span></span> <a href="#">
            <h2>10 places to visit in 2018</h2>
            </a></header>
          <p>Nullam consequat sed purus ut laoreet. Etiam fringilla placerat magna a aliquam. Mauris
            mollis tristique. In ac interdum ipsum. Phasellus in accumsan metus.</p>
          <a class="btn  readmore-btn" href="#">READ MORE</a> </article>
        <!--/article--> 
        
        <!--article-->
        <article class="col-md-12 wow fadeInUp">
          <header class="entry-header"> <span class="date-article"><i class="fa fa-calendar-o"></i> JULY 13 2017</span> <a href="#"><img src="dist/img/a-2.jpg" class="img-responsive"></a> <span class="byline"><span class="author vcard"><a href="#"><i class="fa fa-folder-o"></i> Business &bull; Industry</a><a href="#"><i class="fa fa-user-o"></i> Rijo</a> </span></span> <a href="#">
            <h2>Top 10 tools for Automation and Better in Photoshop </h2>
            </a></header>
          <p>Nullam consequat sed purus ut laoreet. Etiam fringilla placerat magna a aliquam. Mauris
            mollis tristique. In ac interdum ipsum. Phasellus in accumsan metus.</p>
          <a class="btn  readmore-btn" href="#">READ MORE</a> </article>
        <!--/article--> 
        
        <!--article-->
        <article class="col-md-12 wow fadeInUp">
          <header class="entry-header"> <span class="date-article"><i class="fa fa-calendar-o"></i> JULY 13 2017</span> <a href="#"><img src="dist/img/a-3.jpg" class="img-responsive"></a> <span class="byline"><span class="author vcard"><a href="#"><i class="fa fa-folder-o"></i> Business &bull; Industry</a><a href="#"><i class="fa fa-user-o"></i> Rijo</a> </span></span> <a href="#">
            <h2>SUperb Workspace interior design for your new desktop</h2>
            </a></header>
          <p>Nullam consequat sed purus ut laoreet. Etiam fringilla placerat magna a aliquam. Mauris
            mollis tristique. In ac interdum ipsum. Phasellus in accumsan metus.</p>
          <a class="btn  readmore-btn" href="#">READ MORE</a> </article>
        <!--/article-->
        
        <div class="clearfix"></div>
        
        <!--portfolio page nav-->
        <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
          <ul>
            <li >
              <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i></a></div>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li >
              <div class="nav-next"><a href="http://localhost/wordpress/page/2/"> <i class="fa fa-chevron-right"></i></a></div>
            </li>
          </ul>
        </nav><!--/portfolio page nav-->
      </div>
      <!--blog posts container--> 
      
      <!--aside-->
      <aside class="col-md-4 col-sm-12"> 
        <?php get_sidebar();?>
      </aside>
      <!--aside-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
