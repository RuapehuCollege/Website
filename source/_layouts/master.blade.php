<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/customisations.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left" >
        <h1><a href="/#intro" class="scrollto">Ruapehu College</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <pop:content from="/">
          <pop:crest resize="limit" width="100"  style="position: absolute; width: 100px;left:0;top:0;">
            <img src="<pop:src />" alt="" title="" style=""/>
          </pop:crest>
          
          
          
        </pop:content>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <pop:sections except="home-page-slider">
            <li class="<pop:active>menu-active</pop:active> <pop:sections repeat="false">menu-has-children</pop:sections>">
              <a href="<pop:permalink/>"><pop:title/></a>
              <pop:sections wrap="ul" break="li">
                <pop:alternate_url><a href="<pop:value />"><pop:title/></a></pop:alternate_url>
                  <pop:no_alternate_url><a href="<pop:permalink/>"><pop:title/></a></pop:no_alternate_url>
              </pop:sections>
             
            </li>
          </pop:sections>
					<li class="social-links"><a href="https://www.facebook.com/RuapehuCollege/" class="facebook"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <pop:region name="main"/>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Ruapehu College</h3>
            <pop:content from="/">
            <pop:home_footer_text/>
              </pop:content>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="/">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://kamar.ruapehu.school.nz/index.php">KAMAR Portal</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              30 Tainui Street <br>
              Ohakune<br>
              New Zealand <br>
              <strong>Phone:</strong> 06 385 8398<br>
              <strong>Email:</strong> office@ruapehu.school.nz<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/RuapehuCollege/" class="facebook"><i class="fa fa-facebook"></i></a>
              <!--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletters</h4>
            <pop:content from="school-newsletter" wrap="div" class="footer-links">
              <pop:entries limit="4" wrap="ul" break="li" >
                <i class="ion-ios-arrow-right"></i>
                <a href="<pop:file.src />" target="_blank"><pop:title/></a>
              </pop:entries>
            </pop:content>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
            <p>
              © Ruapehu College {{date('Y')}}. All rights reserved.
            </p>
      </div>
      <div class="credits" style="opacity: 0;">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/waypoints/waypoints.min.js"></script>
  <script src="/lib/counterup/counterup.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="/lib/lightbox/js/lightbox.min.js"></script>
  <script src="/lib/touchSwipe/jquery.touchSwipe.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
