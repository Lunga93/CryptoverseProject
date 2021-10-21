<?php 

session_start();

	include("connection.php");
	include("functions.php");

  //check if the user clicked on the signin
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password))
		{

			//read from database
			$query = "select * from devworks.user where Email = '$user_name' limit 1";
			$result = mysqli_query($con, $query)
      or die("can't find user");


      //$row = mysqli_fetch_array($result);
			
        
					$user_data = mysqli_fetch_assoc($result);
          $id = $user_data['User_ID'];
          $query2 = "SELECT * FROM devworks.wallet where User_ID = '$id'";
          $result2 = mysqli_query($con, $query2)
          or die("can't find wallet");
          $user_data2 = mysqli_fetch_assoc($result2);
          $_SESSION['balance'] = $user_data2['Balance'];
          if($user_data > 0) {
          
				  //echo 'shitty code around the world';
					if($user_data['Password'] == $password)
					{
            echo '<script language="javascript">alert("my code no worky!")</script>';
						$_SESSION['email'] = $user_data['Email'];
            $_SESSION['username'] = $user_data['User_ID'];
            $_SESSION['firstname'] = $user_data['F_Name'];
            $_SESSION['lastname'] = $user_data['L_Name'];
						header("Location: index.php");
						die;
					}
          else {
            echo 'please enter correct password';
          }
        }
        else {
          echo '<script language="javascript">alert("Please enter correct information!")</script>';
        }
		}else
		{
			echo '<script language="javascript">alert("please make sure you fill in the boxes!")</script>';
		}
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
                <div class="block">
                    <h2 class="text-center">Sign In to Cryptoverse</h2>
                    
                    <form class="text-left clearfix mt-50" method="POST">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control"  placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <input id="button" type="submit" value="Sign In" class="btn btn-main">
                        
                    </form>
                    
                    <p class="mt-20">New in this site ?<a href="signup.php"> Create New Account</a></p>
                    <p><a href="forget-password.html"> Forgot your password?</a></p>
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
            
            <ul>
              <li><a class="nav-link" href="about.html">About</a></li>
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