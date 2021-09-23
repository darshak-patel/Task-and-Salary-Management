<?php
require("../MyDB.php");

$DeleteDepartment=$_GET['ID'];

$Query="delete from tbl_department where DepartmentID=".$DeleteDepartment;		
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
      		title: "Your Department Succesfully Deleted!.",
     	 	icon: "success",
    		})
    		.then((willDelete) => {
      		if(willDelete) 
			{
         		window.location = "ManageDepartment.php";     
            }
           	else 
			{
        		window.location = "ManageDepartment.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php } ?>