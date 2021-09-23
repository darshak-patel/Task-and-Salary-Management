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
	$Approve=$_POST['Approve'];
	
	if($Approve=='Approved')
	{
		$EmployeeID=$_POST['EmployeeID'];
		$DateFrom=$_POST['DateFrom'];
		$DateTo=$_POST['DateTo'];
		$Remarks=$_POST['Remarks'];
		
		$Query="UPDATE `tbl_leaverequest` SET `EmployeeID`='$EmployeeID',`DateFrom`='$DateFrom',`DateTo`='$DateTo',`Remarks`='$Remarks',`Approve`='$Approve',`ApproveBy`='$EmployeeUsername' WHERE `LeaveRequestID`='$ID'";
		$Result=mysqli_query($con,$Query);
		
		echo "<script>alert('Our Emplyoee Leave Approved');window.location.href='AdminHome.php';</script>";
	} 
	else
	{
		$EmployeeID=$_POST['EmployeeID'];
		$DateFrom=$_POST['DateFrom'];
		$DateTo=$_POST['DateTo'];
		$Remarks=$_POST['Remarks'];
		
		$Query="UPDATE `tbl_leaverequest` SET `EmployeeID`='$EmployeeID',`DateFrom`='$DateFrom',`DateTo`='$DateTo',`Remarks`='$Remarks',`Approve`='$Approve',`ApproveBy`='$EmployeeUsername' WHERE `LeaveRequestID`='$ID'";
		$Result=mysqli_query($con,$Query);
		
		echo "<script>alert('Our Emplyoee Leave Reject');window.location.href='AdminHome.php';</script>";
	}
?>