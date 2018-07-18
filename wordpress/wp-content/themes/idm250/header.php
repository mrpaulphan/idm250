<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Page - Full Width</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(); ?>/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="<?php echo get_template_directory_uri(); ?>/dist/css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="<?php echo get_template_directory_uri(); ?>/dist/css/owl.theme.css" rel="stylesheet" media="screen">
<link href="<?php echo get_template_directory_uri(); ?>/dist/css/animate.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->

<link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">
<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:100,200,300,300i,400,500,600,700,800,900|Lato:300,400|Crimson+Text:400,400i,600' rel='stylesheet' type='text/css'>
<!--<link rel="stylesheet" type="text/css"  href="color-orange.css">-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="single">
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
                'theme_location'  => 'main_menu',
                'container'       => 'ul',
                'menu_class'      => 'nav navbar-nav navbar-right',
            ]);
        ?>
      
      </div>
      <!-- /.navbar-collapse --> 
      
    </div>
    <!-- /.container-fluid --> 
    
  </nav>
</header>
