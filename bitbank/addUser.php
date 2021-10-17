<?php
//get values
$lName = $_REQUEST['L_Name'];
$fName = $_REQUEST['F_Name'];
$uName = $_REQUEST['User_ID'];
$email = $_REQUEST['Email'];
$password = $_REQUEST['Password'];


require_once("config.php");

$conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASE)
            or die("ERROR, unable to connect to database");

$query = "INSERT INTO EMPLOYEE(lName, fName, uName, email, password)
            value ('$lName', '$fName', '$uName', '$email', '$password', '$job')";

$result = msqli_query($conn, $query)
            or die("Unable to add employee");

$msqli_close($conn);

echo "<h3>Complete</h3>";

?>