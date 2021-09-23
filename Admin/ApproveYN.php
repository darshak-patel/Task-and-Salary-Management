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
	
	$ID=$_POST['ID'];
	$Approved=$_POST['Approved'];
	
	if($Approved=='Approved')
	{
		$EmployeeID=$_POST['EmployeeID'];
		$CurruntShift=$_POST['CurruntShift'];
		$RequestedShift=$_POST['RequestedShift'];
		
		$Query="UPDATE `tbl_shiftchangerequest` SET `EmployeeID`='$EmployeeID',`CurruntShift`='$CurruntShift',`RequestedShift`='$RequestedShift',`Approved`='$Approved',`ApprovedBy`='$AdminUser' WHERE `ShiftChangeReqID`='$ID'";
		$Result=mysqli_query($con,$Query);
		
		echo "<script>alert('Our Emplyoee Shift Change Approved');window.location.href='AdminHome.php';</script>";
	} 
	else
	{
		$EmployeeID=$_POST['EmployeeID'];
		$CurruntShift=$_POST['CurruntShift'];
		$RequestedShift=$_POST['RequestedShift'];
		
		$Query="UPDATE `tbl_shiftchangerequest` SET `EmployeeID`='$EmployeeID',`CurruntShift`='$CurruntShift',`RequestedShift`='$RequestedShift',`Approved`='$Approved',`ApprovedBy`='$AdminUser' WHERE `ShiftChangeReqID`='$ID'";
		$Result=mysqli_query($con,$Query);
		
		echo "<script>alert('Our Emplyoee Shift Change Reject');window.location.href='AdminHome.php';</script>";
	}
?>