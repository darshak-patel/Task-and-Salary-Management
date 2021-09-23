<?php
session_start();
if(!isset($_SESSION['AdminUsername']) || $_SESSION['AdminUsername']!=true)
{
	header("Location:index.php");
	exit();
}
else
{
 $AdminUser=$_SESSION['AdminUsername'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>View Product Sell By Sales Manager</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600">
      <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
      <link href="assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
      <link href="assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
      <link href="assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
      <link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link href="assets/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md top-bar-menu">   
    
    <div class="container body">
         <div class="main_container">
         	<?php
			include('Header.php');
			?>
             <div class="right_col" role="main">
             	<div class="">
                	<div class="clearfix"></div>
                    	<div class="row">
                    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-block" style="float:none">
                            	<div class="x_panel">
                                	<div class="x_title">
                                      <h2>View Product Sell By Sales Manager</h2>
                                      <div class="clearfix"></div>
                                   </div>
                                   <div class="x_content table-responsive">
                                   		
                                   		<table class="table table-bordered">
                                        	<thead>
                                            	<tr>
                                                    <th>Selling ID</th>
                                                	<th>Product Name</th>
                                                    <th>Product Price</th>
                                                    <th>Target</th>
                                                    <th>Sell Discount</th>
                                                    <th>Employee Name</th>
                                                    <th>Selling Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
														require("../MyDB.php");
														
														$Query="SELECT * FROM ((tbl_sellingtargetsalemngr INNER JOIN tbl_product ON tbl_product.ProductID=tbl_sellingtargetsalemngr.ProductID) INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_sellingtargetsalemngr.EmployeeID)";
														$Result=mysqli_query($con,$Query);
														
														while($row=mysqli_fetch_array($Result,MYSQLI_ASSOC))
														{	
															$ID=$row['TargetSaleMngrID'];		
												?>
                                            	<tr>
                                                	<td><?php echo $row['TargetSaleMngrID']; ?></td>
                                                    <td><?php echo $row['ProductName']; ?></td>
                                                    <td><?php echo $row['ProductPrice']; ?></td>
                                                    <td><?php echo $row['Target']; ?></td>
                                                    <td><?php echo $row['SellDiscount']; ?></td>
                                                    <td><?php echo $row['Name']; ?></td>
                                                    <td><?php echo $row['SellDate']; ?></td>
                                                </tr>
                                                 <?php } ?>
                                            </tbody>
                                        </table>
                                       
                                   </div>
                                </div>
                            </div>
                        </div>
                </div>
             </div>
         </div>
    </div>
    
</body>
</html>