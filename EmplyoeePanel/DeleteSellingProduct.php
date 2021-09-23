<?php
require("../MyDB.php");

$DeleteSellingProduct=$_GET['ID'];

$Query="delete from tbl_selling where SellingID=".$DeleteSellingProduct;		
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
         		window.location = "ManageSellProduct.php";     
            }
           	else 
			{
        		window.location = "ManageSellProduct.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php } ?>