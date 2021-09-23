<?php
session_start();
if(!isset($_SESSION['EmployeeUsername']) || $_SESSION['EmployeeUsername']!=true)
{
	header("Location:index.php");
	exit();
}
else
{
 $EmployeeUsername=$_SESSION['EmployeeUsername'];
}
?>
<?php
	require("../MyDB.php");
	
	$Name=$_POST['Emplyoee'];
	
	$EmpDate=$_POST['Date'];
	$EmpName=$_POST['EmpName'];
	
	if(isset($_POST['AttendancePA']))
	{
		$AttendancePA = $_POST['AttendancePA'];
	}
	
	$Remarks=$_POST['Remarks'];
	
	$arrlength=count($EmpName);
	$Date=date("Y-m-d");
	
	if($Name=='SelectEmplyoee')
	{
		for($x = 0; $x < $arrlength; $x++) 
		{
			$EDate=$EmpDate[$x];
			$EName=$EmpName[$x];
			$EPA=$AttendancePA[$x];
			$ER=$Remarks[$x];
			
			$Query="INSERT INTO `tbl_attendance`(`Date`, `EmployeeID`, `AttendancePA`, `Remarks`) VALUES ('$EDate','$EName','$EPA','$ER')";
			$Result=mysqli_query($con,$Query);
		}
	}
	
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
      			title: "Our Emplyoee Attandance Is Succesfully Added!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "AddMultipleAttandance.php";     
        }  
        else 
		{
        window.location = "AddMultipleAttandance.php";     
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
         	window.location = "AddMultipleAttandance.php";     
        } 
        else 
		{
        	window.location = "AddMultipleAttandance.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>