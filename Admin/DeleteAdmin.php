<?php
require("../MyDB.php");

$DeleteAdmin=$_GET['ID'];

$Query="delete from tbl_admin where AdminID=".$DeleteAdmin;		
$Result=mysqli_query($con,$Query);

if($Result)
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
      		title: "Your Admin Succesfully Deleted!.",
     	 	icon: "success",
    		})
    		.then((willDelete) => {
      		if(willDelete) 
			{
         		window.location = "ManageAdmin.php";     
            }
           	else 
			{
        		window.location = "ManageAdmin.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php } ?>