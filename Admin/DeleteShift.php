<?php
require("../MyDB.php");

$DeleteShift=$_GET['ID'];

$Query="delete from tbl_shift where ShiftID=".$DeleteShift;		
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
      		title: "Your Shift Succesfully Deleted!.",
     	 	icon: "success",
    		})
    		.then((willDelete) => {
      		if(willDelete) 
			{
         		window.location = "ManageShift.php";     
            }
           	else 
			{
        		window.location = "ManageShift.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php } ?>