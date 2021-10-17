<?php

function check_login($con)
{

	if(isset($_SESSION['User_ID']))
	{

		$id = $_SESSION['User_ID'];
		$query = "select * from user where User_ID = '$id'";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;

}