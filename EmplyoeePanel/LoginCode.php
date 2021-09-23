<?php
session_start();
require_once("../MyDB.php");

$Username=$_POST['Username'];
$Password=$_POST['Password'];

$query="select * from tbl_employee where Username='$Username' and Password='$Password'";
$result=mysqli_query($con,$query);

if($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
  if($Username==$row['Username'] && $Password==$row['Password'])
  {
    if(isset($Username) && isset($Password))
	{
	  $_SESSION['EmployeeUsername']=$Username;
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
      			title: "You Have Successfully Login ",
      			icon: "success",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "AdminHome.php";     
        }  
        else 
		{
        window.location = "AdminHome.php";     
      	}
    	});
    	}
    </script>
</body>
</html>         
<?php
exit();
	}
  }
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
      		title: "'Sorry, You Have Enterd Wrong Username Or Password..' ",
      		icon: "warning",
    		})
    	.then((willDelete) => {
      	if(willDelete) 
		{
         	window.location = "../index.php";     
        } 
        else 
		{
        	window.location = "../index.php";     
      	}
    	});
    }
    </script>
</body>
</html>
<?php
 }		 
?>