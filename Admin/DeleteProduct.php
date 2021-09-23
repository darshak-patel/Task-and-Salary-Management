<?php
require("../MyDB.php");

$DeleteProduct=$_GET['ID'];

$Query="delete from tbl_product where ProductID=".$DeleteProduct;		
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
      		title: "Your Products Succesfully Deleted!.",
     	 	icon: "success",
    		})
    		.then((willDelete) => {
      		if(willDelete) 
			{
         		window.location = "ManageProduct.php";     
            }
           	else 
			{
        		window.location = "ManageProduct.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php } ?>