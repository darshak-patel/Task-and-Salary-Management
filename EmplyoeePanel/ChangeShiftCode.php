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
	
	$Query1="SELECT * FROM tbl_employee INNER JOIN tbl_shiftallot ON tbl_shiftallot.EmployeeID=tbl_employee.EmployeeID where Username='$EmployeeUsername'";
	$Result1=mysqli_query($con,$Query1);
	
	while($Row1=mysqli_fetch_array($Result1))
	{
		$ID=$Row1['EmployeeID'];
	}
	
	$CurruntShift=$_POST['CurruntShift'];
	$RequestedShift=$_POST['RequestedShift'];
	$Approved=$_POST['Approved'];
	
	$Query="INSERT INTO `tbl_shiftchangerequest`(`EmployeeID`, `CurruntShift`, `RequestedShift`, `Approved`, `ApprovedBy`) VALUES ('$ID','$CurruntShift','$RequestedShift','$Approved','')";
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
      			title: "Our Shift Change Request Successfully Requested!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "ChangeShift.php";     
        }  
        else 
		{
        window.location = "ChangeShift.php";     
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
         	window.location = "ChangeShift.php";     
        } 
        else 
		{
        	window.location = "ChangeShift.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>