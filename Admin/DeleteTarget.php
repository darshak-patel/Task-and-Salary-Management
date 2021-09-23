<?php
require("../MyDB.php");

$DeleteTarget=$_GET['ID'];

$Query="delete from tbl_target where TargetID=".$DeleteTarget;		
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
      		title: "Your Target Succesfully Deleted!.",
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
<?php } ?>