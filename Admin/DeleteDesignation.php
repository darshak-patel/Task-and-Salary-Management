<?php
require("../MyDB.php");

$DeleteDesignation=$_GET['ID'];

$Query="delete from tbl_designation where DesignationID=".$DeleteDesignation;		
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
      		title: "Your Designation Succesfully Deleted!.",
     	 	icon: "success",
    		})
    		.then((willDelete) => {
      		if(willDelete) 
			{
         		window.location = "ManageDesignation.php";     
            }
           	else 
			{
        		window.location = "ManageDesignation.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php } ?>