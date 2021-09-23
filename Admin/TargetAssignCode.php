<?php
session_start();
if(!isset($_SESSION['AdminUsername']) || $_SESSION['AdminUsername']!=true)
{
	header("Location:index.php");
	exit();
}
else
{
 $AdminUser=$_SESSION['AdminUsername'];
}
?>
<?php
	require("../MyDB.php");
	
	$ProductID=$_POST['ProductID'];
	$TargetA=$_POST['TargetA'];
	$EmployeeID=$_POST['EmployeeID'];
	
	$Query="INSERT INTO `tbl_targetassign`(`ProductID`,`TargetA`, `EmployeeID`) VALUES ('$ProductID','$TargetA','$EmployeeID')";
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
      			title: "Our Target Will Assign To Dedicated Designation!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "TargetAssign.php";     
        }  
        else 
		{
        window.location = "TargetAssign.php";     
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
         	window.location = "TargetAssign.php";     
        } 
        else 
		{
        	window.location = "TargetAssign.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>