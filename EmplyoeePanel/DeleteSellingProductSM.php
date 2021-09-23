<?php
require("../MyDB.php");

$DeleteAttandance=$_GET['ID'];

$Query="delete from tbl_sellingtargetsalemngr where TargetSaleMngrID=".$DeleteAttandance;		
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
      		title: "Your Selling Product Succesfully Deleted!.",
     	 	icon: "success",
    		})
    		.then((willDelete) => {
      		if(willDelete) 
			{
         		window.location = "ManageSellingProductTargetSM.php";     
            }
           	else 
			{
        		window.location = "ManageSellingProductTargetSM.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php } ?>