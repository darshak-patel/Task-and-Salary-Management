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
      <title>View Leave Approved</title>
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
                                      <h2>Emplyoee Leave Approved</h2>
                                      <div class="clearfix"></div>
                                   </div>
                                   <div class="x_content table-responsive">
                                   		
                                   		<table class="table table-bordered">
                                        	<thead>
                                            	<tr>
                                                    <th>Emplyoee Name</th>
                                                    <th>Date From</th>
                                                    <th>Date To</th>
                                                    <th>Leave Days</th>
                                                    <th>Remarks</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php
														require("../MyDB.php");
														
														$Query="SELECT * FROM tbl_leaverequest INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_leaverequest.EmployeeID WHERE Username='$EmployeeUsername'";
														$Result=mysqli_query($con,$Query);
														
														while($row=mysqli_fetch_array($Result,MYSQLI_ASSOC))
														{	
															$Choose=$row['Approve'];
												?>
                                            	<tr>
                                                	<td><?php echo $row['Name']; ?></td>
                                                    <td><?php echo $row['DateFrom']; ?></td>
                                                    <td><?php echo $row['DateTo']; ?></td>
                                                     <td><?php echo $row['LeaveDaysA']; ?></td>
                                                    <td><?php echo $row['Remarks']; ?></td>
                                                    <?php if($Choose=='Approved'):?>
                                                	<td><span class="label label-success"><?php echo $Choose; ?></span></td>
													<?php elseif($Choose=='Reject'):;?>
                                                        <td><span class="label label-danger"><?php echo $Choose; ?></span></td>
                                                    <?php else:;?>
                                                        <td><span class="label label-warning"><?php echo $Choose; ?></span></td>
                                                    <?php endif;?>
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
    </div><br /><br />
    
</body>
</html>
