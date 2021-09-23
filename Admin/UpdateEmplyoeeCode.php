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
	
	$IDE=$_POST['IDE'];
	
	$Name=$_POST['Name'];
	$Address=$_POST['Address'];
	$MobileNo=$_POST['MobileNo'];
	$AlterMobNo=$_POST['AlterMobNo'];
	$EmailID=$_POST['EmailID'];
	$AadharNo=$_POST['AadharNo'];
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$Active=$_POST['Active'];
	$BasicPay=$_POST['BasicPay'];
	$DepartmentID=$_POST['DepartmentID'];
	$DesignationID=$_POST['DesignationID'];
	$LeaveDays=$_POST['LeaveDays'];
	
	$Query="UPDATE `tbl_employee` SET `Name`='$Name',`Address`='$Address',`MobileNo`='$MobileNo',`AlterMobNo`='$AlterMobNo',`EmailID`='$EmailID',`AadharNo`='$AadharNo',`Username`='$Username',`Password`='$Password',`Active`='$Active',`BasicPay`='$BasicPay',`DepartmentID`='$DepartmentID',`DesignationID`='$DesignationID',`LeaveDays`='$LeaveDays' WHERE `EmployeeID`='$IDE'";
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
      			title: "Our Employee Is Succesfully Updated!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "ManageEmplyoee.php";     
        }  
        else 
		{
        window.location = "ManageEmplyoee.php";     
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
         	window.location = "ManageEmplyoee.php";     
        } 
        else 
		{
        	window.location = "ManageEmplyoee.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>