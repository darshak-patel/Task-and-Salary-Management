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
	$Date=$_POST['Date'];
	$EmployeeID=$_POST['EmployeeID'];
	$AttendancePA=$_POST['AttendancePA'];
	$Remarks=$_POST['Remarks'];
	
	$Query="UPDATE `tbl_attendance` SET `Date`='$Date',`EmployeeID`='$EmployeeID',`AttendancePA`='$AttendancePA',`Remarks`='$Remarks' WHERE `AttendanceID`='$ID'";
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
      			title: "Our Emplyoee Attandance Successfully Updated!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "ViewEmplyoeeAttandance.php";     
        }  
        else 
		{
        window.location = "ViewEmplyoeeAttandance.php";     
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
         	window.location = "ViewEmplyoeeAttandance.php";     
        } 
        else 
		{
        	window.location = "ViewEmplyoeeAttandance.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>