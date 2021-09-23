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
	
	$ProductID=$_POST['ProductID'];
	$Target=$_POST['Target'];
	$TargetDescription=$_POST['TargetDescription'];
	$SalesManagerInsntv=$_POST['SalesManagerInsntv'];
	$TeamLeaderInsntv=$_POST['TeamLeaderInsntv'];
	$EmplyoeeInsntv=$_POST['EmplyoeeInsntv'];
	$Month=$_POST['Month'];
	$Year=$_POST['Year'];
	
	$Query="INSERT INTO `tbl_target`(`ProductID`,`Target`, `TargetDescription`, `SalesManagerInsntv`, `TeamLeaderInsntv`, `EmplyoeeInsntv`,`Month`,`Year`) VALUES ('$ProductID','$Target','$TargetDescription','$SalesManagerInsntv','$TeamLeaderInsntv','$EmplyoeeInsntv','$Month','$Year')";
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
      			title: "Our Target Is Succesfully Added!",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "AddTarget.php";     
        }  
        else 
		{
        window.location = "AddTarget.php";     
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
         	window.location = "AddTarget.php";     
        } 
        else 
		{
        	window.location = "AddTarget.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
	}
?>