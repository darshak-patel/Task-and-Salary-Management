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
	
	$ProductID=$_POST['ProductID'];
	$ProductPrice=$_POST['ProductPrice'];
	$Target=$_POST['Target'];
	$SellDiscount=$_POST['SellDiscount'];
	$EmployeeID=$_POST['EmployeeID'];
	$SellDate=$_POST['SellDate'];
	
	$Query="INSERT INTO `tbl_sellingtargetsalemngr`(`ProductID`, `ProductPrice`,`Target`, `EmployeeID`, `SellDate`) VALUES ('$ProductID','$ProductPrice','$Target','$EmployeeID','$SellDate')";
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
      			title: "Our Product Is Sell Successfully!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "AddSellingProductTargetSM.php";     
        }  
        else 
		{
        window.location = "AddSellingProductTargetSM.php";     
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
         	window.location = "AddSellingProductTargetSM.php";     
        } 
        else 
		{
        	window.location = "AddSellingProductTargetSM.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>