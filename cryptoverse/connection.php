<?php

$SERVERNAME = "is3-dev.ict.ru.ac.za"; 
$USERNAME = "G18P9743";
$PASSWORD = "G18P9743";
$DATABASE = "devworks";

if(!$con = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE))
{

	die("failed to connect!");
}
