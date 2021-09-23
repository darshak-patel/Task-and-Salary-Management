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
	
		$Designation=$_POST['Designation'];

		if($Designation=='SalesManager')
		{
			$TargetSelect=$_POST['TargetSelectSM'];
			$Insentive=$_POST['Insentive'];
			if($Insentive!=='')
			{
			   $IT=$Insentive;
			}
			else
			{
			$IT = '';
			}
			$GrandTotal=$_POST['GrandTotal'];
			$TargetAchive=$_POST['TargetAchive'];
		}
		elseif($Designation=='TeamLeader')
		{
		    
			$TargetSelect=$_POST['TargetSelectTL'];
			$Insentive=$_POST['Insentive'];
			if($Insentive!=='')
			{
			   $IT=$Insentive;
			}
			else
			{
			$IT = '';
			}
			$GrandTotal=$_POST['GrandTotal'];
			$TargetAchive=$_POST['TargetAchive'];

		}
		else
		{
			$TargetSelect=$_POST['TargetSelect'];
			$Insentive=$_POST['Insentive'];
			if($Insentive!=='')
			{
			   $IT=$Insentive;
			}
			else
			{
			$IT = '';
			}
			$GrandTotal=$_POST['GrandTotal'];
			$TargetAchive=$_POST['TargetAchive'];
		}
		
		$Query="INSERT INTO `tbl_salary`(`Designation`, `EmpName`, `Insentive`, `TotalSalary`, `TargetAchive`) VALUES ('$Designation','$TargetSelect','$IT','$GrandTotal','$TargetAchive')";
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
      			title: "Our Emplyoee Salary Successfully Added!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "AddSalaryAchivement.php";     
        }  
        else 
		{
        window.location = "AddSalaryAchivement.php";     
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
         	window.location = "AddSalaryAchivement.php";     
        } 
        else 
		{
        	window.location = "AddSalaryAchivement.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php 
}
?>