<?php

session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $balance = $_SESSION['balance'];
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

  <!--User-Icon & Wallet-->
  <script src="https://kit.fontawesome.com/89d1df85fa.js" crossorigin="anonymous"></script>

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
  <link rel="stylesheet" href="see.css">
  <script src="https://kit.fontawesome.com/15f4b1a016.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="path/font/awesome/css/font-awesome.min.css">


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
        <div class="cryptohopper-web-widget" data-id="2" data-text_color="#ffffff" data-background_color="#000000"
          data-numcoins="10" data-realtime="on" data-ticker_position="header" data-ticker_speed="90" data-round="0"
          data-logos="0"></div>
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
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Wallet.html">Wallet </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="orders.html">Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.html">Portfolio</a>
              </li>


              <li class="nav-item">
                <a class="far fa-user" href="userprofile.php">
                  <?php if (isset($_SESSION['username'])) {
                                                                        echo "   " . $username;
                                                                      } else {
                                                                        echo 'guest';
                                                                      } ?>
                </a>
              </li>
            </ul>
          </div>
        </nav>

      </div>
    </div>
  </div>
</section>

<!--
Welcome Slider
==================================== -->


<!--
Wallet
==================================== -->
<section class="call-to-action section-sm">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1><i class="fas fa-user"></i> My Wallet</h1>
      </div>
      <div class="col-md-12 amount-box text-center">
        <i class="fas fa-wallet"></i>
      </div>
      <div class="col-md-12 text-center">
        <p>
        <h3>Total Balance</h3>
        </p>
        <p class="amount">$
          <?php 
                                echo " " . $balance;
                              ?>
        </p>
      </div>
      <div class="col-md-12 text-center">
        <p><a href="deposit.html" class="btn btn-outline-light">Deposit</a>
          <a href="withdraw.html" class="btn btn-outline-light">Withdraw</a>
        </p>
      </div>

    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->

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

</body>

</html>