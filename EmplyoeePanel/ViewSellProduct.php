<?php
session_start();
if(!isset($_SESSION['EmployeeUsername']) || $_SESSION['EmployeeUsername']!=true)
{
	header("Location:../index.php");
	exit();
}
else
{
 $EmployeeUsername=$_SESSION['EmployeeUsername'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>View Sell Product Assign To Emplyoee</title>
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
                                      <h2>View Sell Product Assign To Emplyoee</h2>
                                      <div class="clearfix"></div>
                                   </div>
                                   <div class="x_content table-responsive">
                                   		
                                   		<table class="table table-bordered">
                                        	<thead>
                                            	<tr>
                                                    <th>Sell ID</th>
                                                    <th>Emplyoee Name</th>
                                                    <th>Product Name</th>
                                                    <th>Product Price</th>
                                                    <th>Target</th>
                                                    <th>Discount</th>
                                                    <th>Sell Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
														require("../MyDB.php");
														
														$Query="select * from (((tbl_selling INNER JOIN tbl_product ON tbl_product.ProductID=tbl_selling.ProductID) INNER JOIN tbl_targetassignemplyoee ON tbl_targetassignemplyoee.EmployeeID=tbl_selling.EmployeeID) INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_selling.EmployeeID) WHERE tbl_targetassignemplyoee.AssignEmp='$EmployeeUsername'";
														$Result=mysqli_query($con,$Query);
														
														while($row=mysqli_fetch_array($Result,MYSQLI_ASSOC))
														{			
												?>
                                            	<tr>
                                                	<td><?php echo $row['SellingID']; ?></td>
                                                    <td><?php echo $row['Name']; ?></td>
                                                    <td><?php echo $row['ProductName']; ?></td>
                                                    <td><?php echo $row['ProductPrice']; ?></td>
                                                    <td><?php echo $row['Target']; ?></td>
                                                    <td><?php echo $row['SellDiscount']; ?></td>
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
    </div><br><br><br><br>
    
</body>
</html>
