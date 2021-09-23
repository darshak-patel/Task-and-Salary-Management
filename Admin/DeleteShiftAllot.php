<?php
require("../MyDB.php");

$DeleteShiftAllot=$_GET['ID'];

$Query="delete from tbl_shiftallot where ShiftAllotID=".$DeleteShiftAllot;		
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
      		title: "Your Shift Allot Succesfully Deleted!.",
     	 	icon: "success",
    		})
    		.then((willDelete) => {
      		if(willDelete) 
			{
         		window.location = "ManageShiftAllot.php";     
            }
           	else 
			{
        		window.location = "ManageShiftAllot.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php } ?>