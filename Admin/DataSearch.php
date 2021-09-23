<?php /*?><?php
require("../MyDB.php");


$UName = $_POST['UName'];

$Query = "select count(*) as cntUser from tbl_employee where Username='".$UName."'";
$Result = mysqli_query($con,$Query);

$row = mysqli_fetch_array($Result);

$Count = $row['cntUser'];

echo $Count;
?><?php */?>



<?php
require("../MyDB.php");


$UName = $_POST['UName'];

$Query = "select count(*) as cntUser from tbl_employee where Username='".$UName."'";
$Result = mysqli_query($con,$Query);

$row = mysqli_fetch_array($Result);

$Count = $row['cntUser'];

echo $Count;
?>