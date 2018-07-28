<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <?php wp_head();?>
</head>
<body class="single <?php echo body_class();?>">
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
                  <li>
                    <a href="mailto:someone@example.com?">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:someone@example.com?">
                      <i class="fa fa-rss"></i>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:someone@example.com?">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:someone@example.com?">
                      <i class="fa fa-linkedin-square"></i>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:someone@example.com?">
                      <i class="fa fa-vimeo-square"></i>
                    </a>
                  </li>
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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Numero</a>
        </div>

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