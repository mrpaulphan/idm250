<!-- Footer ==========================================-->
<footer class="bottom-footer">
  <div class="container">
    <div class="row">

      <!--site details-->
      <div class="col-md-3 col-sm-12 col-xs-12 site-identity">
        <a class="navbar-brand" href="index.html">Numero</a>
        <p>Numero that can help you prototyping easy entire websites in Photoshop and Sketch. </p>
        <ul class="socio">
          <li>
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-rss"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-youtube"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-pinterest"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-dribbble"></i>
            </a>
          </li>
        </ul>
      </div>
      <!--/site details-->

      <!--col-1-->
      <?php
            wp_nav_menu([
                'theme_location'  => 'footer_menu',
                'container'       => 'div',
                'menu_class'      => 'col-md-2 col-sm-4 col-xs-4 root-widget',
            ]);
        ?>


        <!--/col-1-->

        <!--col-2-->
        <div class="col-md-2 col-sm-4 col-xs-4 root-widget">
          <?php
            wp_nav_menu([
                'theme_location'  => 'footer_menu',
                'container'       => 'div',
                'menu_class'      => 'col-md-2 col-sm-4 col-xs-4 root-widget',
            ]);
        ?>
        </div>
        <!--/col-2-->
        <!--col-3-->
        <div class="col-md-2 col-sm-4 col-xs-4 root-widget">
          <?php
            wp_nav_menu([
                'theme_location'  => 'footer_menu',
                'container'       => 'div',
                'menu_class'      => 'col-md-2 col-sm-4 col-xs-4 root-widget',
            ]);
        ?>
        </div>
        <!--/col-3-->

        <!--contact details-->
        <div class="col-md-3 col-sm-12 col-xs-12  subcribe-block">
          <h6>subscribe</h6>
          <p>Subscribe to our newsletter and get some freebies stuff every week. </p>
          <form class="form">
            <div class="form-group">
              <input type="email" placeholder="Your Email Address" class="form-control" />
            </div>
            <div class="form-group">
              <button class="btn btn-default btn-block ">
                <i class="fa fa-send"></i>
              </button>
            </div>
          </form>
        </div>
        <!--/contact details-->
        <div class="col-md-12">
          <p class="copyright">© 2018
            <a href="https://dcrazed.com/">Numero</a>. All rights reserved</p>
        </div>
    </div>
  </div>
</footer>
<?php wp_footer();?>
</body>
</html>