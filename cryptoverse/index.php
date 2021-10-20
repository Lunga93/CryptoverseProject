<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx">
<!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">

  <meta name="author" content="Themefisher.com">

  <title>Cryptoverse</title>

  <!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font.v-2/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <script src="https://kit.fontawesome.com/15f4b1a016.js" crossorigin="anonymous"></script>


</head>



<!--
  Start Preloader
  ==================================== -->
<div id="preloader">
  <div class="preloader">
    <div class="sk-circle1 sk-child"></div>
    <div class="sk-circle2 sk-child"></div>
    <div class="sk-circle3 sk-child"></div>
    <div class="sk-circle4 sk-child"></div>
    <div class="sk-circle5 sk-child"></div>
    <div class="sk-circle6 sk-child"></div>
    <div class="sk-circle7 sk-child"></div>
    <div class="sk-circle8 sk-child"></div>
    <div class="sk-circle9 sk-child"></div>
    <div class="sk-circle10 sk-child"></div>
    <div class="sk-circle11 sk-child"></div>
    <div class="sk-circle12 sk-child"></div>
  </div>
</div>
<!--
  End Preloader
  ==================================== -->




<!--
Fixed Navigation
==================================== -->
<section class="top-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <script src="https://www.cryptohopper.com/widgets/js/script"></script>
        <div class="cryptohopper-web-widget" data-id="2" data-text_color="#ffffff" data-background_color="#000000" data-numcoins="10" data-realtime="on" data-ticker_position="header" data-ticker_speed="90" data-round="0" data-logos="0"></div>
        <script src="https://kit.fontawesome.com/15f4b1a016.js" crossorigin="anonymous"></script>
      </div>
    </div>
  </div>
  </div>
</section>
<section class="header navigation">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="tf-ion-android-menu"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Wallet.html">Wallet </a>

              <li class="nav-item">
                <a class="nav-link" href="portfolio.html">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="notifications.html">Watchlist</a>
              </li>


              <li class="nav-item">
                <a class="far fa-user" href="userprofile.php"><?php if (isset($_SESSION['username'])) {
                                                                  echo "   " . $username;
                                                                } else {
                                                                  echo 'guest';
                                                                } ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="team.html">User Details</a>
                  <a class="dropdown-item" href="404.html">404 Page</a>
                  <a class="dropdown-item" href="blog.html">Blog Page</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>

      </div>
    </div>
  </div>
  </div>
</section>

<!--
Welcome Slider
==================================== -->
<div id="main">
  <section class="hero-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center mb-4 mb-lg-0">
          <div class="video-player">

            </a>
          </div>
        </div>




      </div>
    </div>
</div>
</div>
</section>
</div>



<!--
Start About Section
==================================== -->
<section class="service-2 section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="title text-center">
          <div class="cryptohopper-web-widget" data-id="4" data-coins="bitcoin,ethereum,litecoin"></div>
        </div>
      </div>
    </div>



    <!-- Start Testimonial
=========================================== -->

    <section class="testimonial section" id="testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- testimonial wrapper -->
            <div class="testimonial-slider">
              <class class="item">
                <div class="block">
                  <div class="cryptohopper-web-widget" data-id="5" data-atid="5"></div>
                </div>
              </class>


              <!-- /client photo -->
            </div>
          </div>




        </div>
      </div>

      <!-- /client photo -->
  </div>
  </div>



  </div>
  </div>

  <!-- /client photo -->
  </div>
  </div>
  <!-- /testimonial single -->
  <!-- testimonial single -->
  <div class="item">
    <div class="block">
      <!-- client info -->
      <div class="client-details">

      </div>
      <!-- /client info -->
      <!-- client photo -->
      <div class="media client-meta">

        <div class="media-body">

        </div>
      </div>

      <!-- /client photo -->
    </div>
  </div>
  <!-- /testimonial single -->
  <!-- testimonial single -->
  <div class="item">
    <div class="block">
      <!-- client info -->

      <!-- /client info -->
      <!-- client photo -->
      <div class="media client-meta">

        <div class="media-body">

        </div>
      </div>

      <!-- /client photo -->
    </div>
  </div>
  <!-- /testimonial single -->
  </div>
  </div> <!-- end col lg 12 -->
  </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End Section -->


</div> <!-- end row -->
</div> <!-- end container -->
</section> <!-- end section -->




<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3> About</h3>
          <ul>
            <li><a class="nav-link" href="team.html">About</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Contact</h3>
          <ul>
            <li><a class="nav-link" href="contact.html">Contact</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>Email</h3>
          <ul>
            <li><a class="nav-link" href="email.html">Email</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>FAQ</h3>
          <ul>
            <li><a class="nav-link" href="faq.html">FAQ</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2021. CryptoVerse.</h5>
    <h6>Design and Developed by Devworks</h6>
  </div>
</footer> <!-- end footer -->


<!-- end Footer Area
    ========================================== -->



<!-- 
    Essential Scripts
    =====================================-->

<!-- Main jQuery -->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/dist/js/popper.min.js"></script>
<script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<!-- Smooth Scroll js -->
<script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>

<!-- Custom js -->
<script src="js/script.js"></script>

<script src="https://www.cryptohopper.com/widgets/js/script"></script>
<script src="https://www.cryptohopper.com/widgets/js/script"></script>
</body>

</html>