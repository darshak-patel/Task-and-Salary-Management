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
      <title>Manage Shift Allot</title>
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
                    		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-block" style="float:none">
                            	<div class="x_panel">
                                	<div class="x_title">
                                      <h2>Manage Shift Allot</h2>
                                      <div class="clearfix"></div>
                                   </div>
                                   <div class="x_content table-responsive">
                                   		
                                   		<table class="table table-bordered">
                                        	<thead>
                                            	<tr>
                                                	<th>Delete</th>
                                                    <th>Edit</th>
                                                	<th>Employee ID</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
														require("../MyDB.php");
														
														$Query="select * from (((tbl_employee INNER JOIN tbl_shiftallot ON tbl_employee.EmployeeID=tbl_shiftallot.EmployeeID) INNER JOIN tbl_shift ON tbl_shift.ShiftID=tbl_shiftallot.ShiftID) INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID)";
														$Result=mysqli_query($con,$Query);
														
														while($row=mysqli_fetch_array($Result,MYSQLI_ASSOC))
														{	
															$ID=$row['ShiftAllotID'];		
												?>
                                            	<tr>
                                                	<td><?php echo "<a class='btn btn-danger' href='DeleteShiftAllot.php?ID=$ID'>Delete</a>"; ?></td>
                                                    <td><?php echo "<a class='btn btn-info' href='UpdateShiftAllot.php?ID=$ID'>Update</a>"; ?></td>
                                                	<td><?php echo $row['ShiftAllotID']; ?></td>
                                                    <td><?php echo $row['Name']; ?> - <?php echo $row['DesignationName']; ?></td>
                                                    <td><?php echo $row['ShiftName']; ?></td>
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