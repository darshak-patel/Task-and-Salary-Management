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
	
	$Query1="SELECT * FROM tbl_employee where Username='$EmployeeUsername'";
	$Result1=mysqli_query($con,$Query1);
	
	while($Row1=mysqli_fetch_array($Result1))
	{
		$ID=$Row1['EmployeeID'];
	}
	
	$DateFrom=$_POST['DateFrom'];
	$DateTo=$_POST['DateTo'];
	$LeaveDaysA=$_POST['LeaveDaysA'];
	$Remarks=$_POST['Remarks'];
	$Approve=$_POST['Approve'];
	
	$Query="INSERT INTO `tbl_leaverequest`(`EmployeeID`, `DateFrom`, `DateTo`,`LeaveDaysA`, `Remarks`, `Approve`, `ApproveBy`) VALUES ('$ID','$DateFrom','$DateTo','$LeaveDaysA','$Remarks','$Approve','')";
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
      			title: "Our Leave Request Successfully Requested!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "LeaveApplication.php";     
        }  
        else 
		{
        window.location = "LeaveApplication.php";     
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
         	window.location = "LeaveApplication.php";     
        } 
        else 
		{
        	window.location = "LeaveApplication.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>