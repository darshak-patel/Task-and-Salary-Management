<?php
session_start();
if(!isset($_SESSION['EmployeeUsername']) || $_SESSION['EmployeeUsername']!=true)
{
	header("Location:../index.php");
	exit();
}
else
{
 $EmployeeUsername=$_SESSION['EmployeeUsername'];
}
?>
<?php
	require("../MyDB.php");
	
	$ID=$_POST['ID'];
	$ProductID=$_POST['ProductID'];
	$ProductPrice=$_POST['ProductPrice'];
	$Target=$_POST['Target'];
	$EmployeeID=$_POST['EmployeeID'];
	$SellDate=$_POST['SellDate'];
	
	$Query="UPDATE `tbl_sellingtargetleader` SET `ProductID`='$ProductID',`ProductPrice`='$ProductPrice',`Target`='$Target',`EmployeeID`='$EmployeeID',`SellDate`='$SellDate' WHERE `TargetTeamLeaderID`='$ID'";
	$Result=mysqli_query($con,$Query);
	
	if($Result)
	{
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<title>Untitled Document</title></head>
<body onLoad="JSconfirm()">
    <script type="text/javascript">
    	function JSconfirm(){
    	swal({
      			title: "Our Selling Product Succesfully Updated!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "ManageSellingProductTarget.php";     
        }  
        else 
		{
        window.location = "ManageSellingProductTarget.php";     
      	}
    	});
    	}
    </script>
</body>
</html>
<?php
	}
	else
	{
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body onLoad="JSconfirm()"> 
    <script type="text/javascript">
    	function JSconfirm(){
    	swal({
      		title: "Sorry, You Entered Wrong Detail Please Add Carefully!",
      		icon: "warning",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "ManageSellingProductTarget.php";     
        } 
        else 
		{
        	window.location = "ManageSellingProductTarget.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>