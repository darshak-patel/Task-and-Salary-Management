<?php
$Host = 'localhost';	
$UserName = 'root';
$Password = '';

$DB = 'salarymngmt';
	
$con = mysqli_connect($Host,$UserName,$Password,$DB) or die ("Connection Failed Check Again...");
mysqli_select_db($con,$DB);
?>