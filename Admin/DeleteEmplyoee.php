<?php
require("../MyDB.php");

$DeleteEmplyoee=$_GET['ID'];

$Query="delete from tbl_employee where EmployeeID=".$DeleteEmplyoee;		
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
      		title: "Your Emplyoee Succesfully Deleted!.",
     	 	icon: "success",
    		})
    		.then((willDelete) => {
      		if(willDelete) 
			{
         		window.location = "ManageEmplyoee.php";     
            }
           	else 
			{
        		window.location = "ManageEmplyoee.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php } ?>