<?php
require("../MyDB.php");

/* Get username */
$UName = $_POST['UName'];

$Query = "select count(*) as cntUser from tbl_admin where Username='".$UName."'";
$Result = mysqli_query($con,$Query);

$row = mysqli_fetch_array($Result);

$Count = $row['cntUser'];

echo $Count;
?>