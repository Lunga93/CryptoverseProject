<?php

session_start();

if(isset($_SESSION['email']))
{
	unset($_SESSION['email']);
	unset($_SESSION['username']);

}

header("Location: login.php");
die;