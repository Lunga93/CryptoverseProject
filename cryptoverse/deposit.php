<?php

session_start();

include("connection.php");
include("functions.php");
//check if the user clicked on the signin
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $query = "SELECT * FROM devworks.wallet WHERE User_ID = '$username'";

  $result = mysqli_query($con, $query)
            or die("couldnt make update");

  $user_data = mysqli_fetch_assoc($result);
  $balance = $user_data['Balance'];
}
if($_SERVER['REQUEST_METHOD'] == "POST")
{
$user_data = check_login($con);

    $amount = $_REQUEST['ammount'];
    $balance = $balance + $amount;

    $query = "UPDATE devworks.wallet
    SET Balance = $balance
    WHERE User_ID = '$username';";

    mysqli_query($con, $query)
    or die("couldnt make update");

    header("Location: wallet.php");
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="zxx"> <!--<![endif]-->
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
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Wallet.php">Wallet </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="orders.html">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="portfolio.html">Portfolio</a>
                            </li>
                            

                            <li class="nav-item">
                              <a class="far fa-user" href="userprofile.php"><?php if (isset($_SESSION['username'])) {
                                echo "   " . $username;
                              } else {
                                echo 'guest';
                              } ?></a>
                                
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
</section>
<!--
Add Card Details
==================================== -->
<section class="call-to-action section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left">
				<form method= "POST">
          <fieldset>
                        <h2> Add Your Card Details</h2> 
                        <label for="firstName"> First Name:</label><br>
                        <input type="text" name="firstName" id="firstName" size="35" required><br>


                        <label for="lastName"> Last Name:</label><br>
                        <input type="text" name="lastName" id="lastName" size="35" required><br>

                        <label for="ammount">Enter amount:</label><br>
                        <input type="text" name="ammount" id="ammount" size="25" required><br>

                        <label for="cardNumber"> Card Number:</label><br>
                        <input type="number" name="cardNumber" id="cardNumber" size="25" maxlength="16" required><br><br>

                    <label for="expiryDate"> Expiry Date:</label><br>
                        <input type="number" name="expiryDate" id="expiryDate" size="25" maxlength="4" pattern="[0-12]/{31}" required><br>

                        <label for="CVVNumber"> CVV Number:</label><br>
                        <input type="number" name="CVVNumber" id="CVVNumber" size="25" maxlength="4" required><br>

                        <label for="postCode"> Postal code:</label><br>
                        <input type="text" name="postalCode" id="postalCode" size="25" maxlength="4" required><br>

                        
                        
                        <label for="jobTitle"> Type of Bank:</label><br>
                        <select id= "bank" name="bank">
                        <option value= "ABSA"> ABSA</option>
                        <option value= "FNB"> FNB</option>
                        <option value= "Capitec"> Capitec</option>
                        <option value= "Nedbank"> Nedbank</option>
                        <option VALUE= "Standard Bank"> Standard Bank</option>
                        </select><br><br>
                       
                        <input type="submit" name="submit" value="Add">

                    </fieldset> 
                    </div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section> 

<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          
          <ul>
            <li><a class="nav-link" href="team.html">About</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          
          <ul>
             <li><a class="nav-link" href="contact.html">Contact</a></li> 
          </ul>
        </div>
        
        <div class="col-sm-3 col-md-3 col-lg-3">
          
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
