<?php
session_start();

if(isset($_SESSION['AdminUsername']))
{
  unset($_SESSION['AdminUsername']);
  session_unset();
  session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body onload="JSconfirm()">
    <script type="text/javascript">
    	function JSconfirm(){
    	swal({
      		title: "You Have Successfully LogOut",
      		icon: "success",
    		})
    		.then((willDelete) => {
      		if(willDelete) 
			{
         		window.location = "index.php";     
            }
            else 
			{
        		window.location = "index.php";     
      		}
    	});
    	}
    </script>
</body>
</html>
<?php  
}
?>