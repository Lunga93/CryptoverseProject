<?php 
session_start();

	include("connection.php");
	include("functions.php");

  //check if the user clicked on the signup
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$lName = $_REQUEST['L_Name'];
        $fName = $_REQUEST['F_Name'];
        $uName = $_REQUEST['User_ID'];
        $email = $_REQUEST['Email'];
        $password = $_REQUEST['Password'];

		if(!empty($uName) && !empty($password) && !is_numeric($Uname))
		{

			//save to database
			$query = "INSERT INTO devworks.user(lName, fName, uName, email, password)
            value ('$lName', '$fName', '$uName', '$email', '$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter valid information!";
		}
	}
?>
