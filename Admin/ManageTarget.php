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
      <title>Manage Target</title>
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
                                      <h2>Manage Target</h2>
                                      <div class="clearfix"></div>
                                   </div>
                                   <div class="x_content table-responsive">
                                   		
                                   		<table class="table table-bordered">
                                        	<thead>
                                            	<tr>
                                                	<th>Delete</th>
                                                    <th>Edit</th>
                                                	<th>Target ID</th>
                                                    <th>Product Name</th>
                                                    <th>Target</th>
                                                    <th>Target Description</th>
                                                    <th>Sales Manager Insentiv</th>
                                                    <th>Team Leader Insentiv</th>
                                                    <th>Emplyoee Insentiv</th>
                                                    <th>Month</th>
                                                    <th>Year</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
														require("../MyDB.php");
														
														$Query="select * from (tbl_target INNER JOIN tbl_product ON tbl_product.ProductID=tbl_target.ProductID)";
														$Result=mysqli_query($con,$Query);
														
														while($row=mysqli_fetch_array($Result,MYSQLI_ASSOC))
														{	
															$ID=$row['TargetID'];		
												?>
                                            	<tr>
                                                	<td><?php echo "<a class='btn btn-danger' href='DeleteTarget.php?ID=$ID'>Delete</a>"; ?></td>
                                                    <td><?php echo "<a class='btn btn-info' href='UpdateTarget.php?ID=$ID'>Update</a>"; ?></td>
                                                	<td><?php echo $row['TargetID']; ?></td>
                                                    <td><?php echo $row['ProductName']; ?></td>
                                                    <td><?php echo $row['Target']; ?></td>
                                                    <td><?php echo $row['TargetDescription']; ?></td>
                                                    <td><?php echo $row['SalesManagerInsntv']; ?></td>
                                                    <td><?php echo $row['TeamLeaderInsntv']; ?></td>
                                                    <td><?php echo $row['EmplyoeeInsntv']; ?></td>
                                                    <td><?php echo $row['Month']; ?></td>
                                                    <td><?php echo $row['Year']; ?></td>
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