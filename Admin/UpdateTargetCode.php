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
	$ProductID=$_POST['ProductID'];
	$Target=$_POST['Target'];
	$TargetDescription=$_POST['TargetDescription'];
	$SalesManagerInsntv=$_POST['SalesManagerInsntv'];
	$TeamLeaderInsntv=$_POST['TeamLeaderInsntv'];
	$EmplyoeeInsntv=$_POST['EmplyoeeInsntv'];
	$Month=$_POST['Month'];
	$Year=$_POST['Year'];
	
	$Query="UPDATE `tbl_target` SET `ProductID`='$ProductID', `Target`='$Target',`TargetDescription`='$TargetDescription',`SalesManagerInsntv`='$SalesManagerInsntv',`TeamLeaderInsntv`='$TeamLeaderInsntv',`EmplyoeeInsntv`='$EmplyoeeInsntv',`Month`='$Month',`Year`='$Year' WHERE `TargetID`='$ID'";
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
      			title: "Our Target Is Succesfully Updated!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "ManageTarget.php";     
        }  
        else 
		{
        window.location = "ManageTarget.php";     
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
         	window.location = "ManageTarget.php";     
        } 
        else 
		{
        	window.location = "ManageTarget.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>