<?php

echo "this should be logging me out";
session_start();

if(isset($_SESSION['email']))
{
	unset($_SESSION['email']);
	unset($_SESSION['username']);

}

header("Location: login.php");
die;


?>

<html>
	<body>
	 <h1>got to login page</h1>
	</body>
</html>