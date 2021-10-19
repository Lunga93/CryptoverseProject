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
            value ('$lName', '$fName', '$uName', '$email', '$password')";

            mysqli_query($con, $query)
            or die("Unable to add employee");

			header("Location: login.php");
			die;
		}else
		{
			echo '<script language="javascript">alert("wrong username or password!")</script>';
		}
	}
?>
