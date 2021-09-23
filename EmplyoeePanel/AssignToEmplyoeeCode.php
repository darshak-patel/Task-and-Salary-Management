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
	
	$Emp=$_POST['Emp'];
	$Name=$_POST['Emplyoee'];
	
	$EmpName=$_POST['EmpName'];
	$Product=$_POST['Product'];
	$Target=$_POST['Target'];
	
	if($Name=='SelectEmplyoee')
	{
			/*$Query="INSERT INTO `tbl_attendance`(`EmployeeName`, `ProductName`, `Target`) VALUES ('$ENameA','$ProductA','$TargetA')";*/
			$Query="INSERT INTO `tbl_targetassignemplyoee`(`EmployeeID`, `ProductID`, `TargetA`,`AssignEmp`) VALUES ('$EmpName','$Product','$Target','$Emp')";
			$Result=mysqli_query($con,$Query);
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
      			title: "Our Product Target Sent To Emplyoee Is Succesfully!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "AssignToEmplyoee.php";     
        }  
        else 
		{
        window.location = "AssignToEmplyoee.php";     
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
         	window.location = "AssignToEmplyoee.php";     
        } 
        else 
		{
        	window.location = "AssignToEmplyoee.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>