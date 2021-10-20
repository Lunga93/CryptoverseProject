<?php 
session_start();

	include("connection.php");
	include("functions.php");

  //check if the user clicked on the signup
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$lName = $_REQUEST['lName'];
        $fName = $_REQUEST['fName'];
        $uName = $_REQUEST['uName'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

		if(!empty($uName) && !empty($password))
		{

			//save to database
			$query = "INSERT INTO devworks.user(L_Name, F_Name, User_ID, Email, Password)
            value ('$lName', '$fName', '$uName', '$email', '$password');";

            mysqli_query($con, $query)
            or die("Unable to add employee");

            $query2 = "INSERT INTO devworks.wallet(User_ID, Balance)
              value ('$uName', 1000)";

              mysqli_query($con, $query2)
              or die("Unable to add details in wallet");

			header("Location: login.php");
			die;
		}else
		{
			echo '<script language="javascript">alert("Please provide the correct information!")</script>';
		}
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



</head>

<body id="body">

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
  

  <section class="signin-page account">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="block text-center">
            <h2 class="text-center">Create Your Account</h2>
            <form class="text-left clearfix mt-30" method="POST">
              <div class="form-group">
                <input type="text" name="fName" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" name="lName" class="form-control" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="text" name="uName" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <input id="button" type="submit" value="Sign Up" class="btn btn-main text-center">
            </form>
            <p class="mt-20">Already have an account ?<a href="login.php"> Login</a></p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <footer id="footer" class="bg-one">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-lg-3">
            <h3> About</h3>
            <ul>
              <li><a class="nav-link" href="about.html">About</a></li>
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