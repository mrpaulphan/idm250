<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php the_title();?> | IDM250</title>
<!-- Open Wordpress Header Code -->
<?php wp_head(); ?>
<!-- Close Wordpress Header Code -->
</head>

<body <?php body_class('single');?> >
<header id="menutop"> 
  
  <!-- Navigation
    ==========================================-->
  <nav id="top-menu" class="navbar navbar-default navbar-fixed-top"> 
    
    <!--Header top-->
    <section id="header-top-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="pull-left">
              <ul class="">
                <li>Phone: +232456758-212</li>
              </ul>
            </div>
            <div class="pull-right">
              <ul class="list-inline top-social-link">
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-rss"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-linkedin-square"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-vimeo-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/Header top-->
    
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html">Numero</a> </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
        
        <!--search-cart-block -->
        <div class="search-cart-block"> 
          <!--search form-->
          
          <form method="get" action="/search.html" id="search">
            <input name="q" type="text" size="40" placeholder="Search..." />
          </form>
          <!--/search form-->
          
        </div>
        <!--/search-cart-block -->
        
        <?php 
            wp_nav_menu([
                'theme_location'  => 'main',
                'container'       => 'ul',
                'menu_class'      => 'nav navbar-nav navbar-right',
            ]);
        ?>
         <!--<ul class="nav navbar-nav navbar-right">
          <li><a href="blog-post.html" class="page-scroll">Templates</a>
            <ul class="sub-menu">
              <li><a href="#">Sub Menu 1</a></li>
              <li><a href="#">Sub Menu 2</a></li>
              <li><a href="#">Sub Menu 3</a></li>
              <li ><a href="#">Sub Menu 4 </a>
                <ul>
                  <li ><a href="#">Deep Menu 1 </a>
                    <ul class="sub-menu">
                      <li><a href="#">Sub Deep 1</a></li>
                      <li><a href="#">Sub Deep 2</a></li>
                      <li><a href="#">Sub Deep 3</a></li>
                      <li><a href="#">Sub Deep 4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Deep Menu 2</a></li>
                </ul>
              </li>
              <li><a href="#">Sub Menu 5</a></li>
            </ul>
          </li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="page.html">Page</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          
          li><a href="contact.html">Contact</a></li>
        </ul> --> 
      </div>
      <!-- /.navbar-collapse --> 
      
    </div>
    <!-- /.container-fluid --> 
    
  </nav>
</header>

