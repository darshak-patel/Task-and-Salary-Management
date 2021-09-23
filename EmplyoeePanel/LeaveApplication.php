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
      <title>Leave Application</title>
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
            	<div class="row">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-block" style="float:none">
                    	<div class="x_panel">
                        	<div class="x_title">
                              <h2>Leave Application</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            	<form class="form-horizontal form-label-left" method="post" action="LeaveApplicationCode.php">
                                 <div class="form-group">
                                    <label> Date From </label>
                                    <input type="date" name="DateFrom" value="<?php echo date('Y-m-d'); ?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> Date To </label>
                                    <input type="date" name="DateTo" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> Leave Days </label>
                                    <input type="number" name="LeaveDaysA" class="form-control">
                                 </div>
                                 <?php
								 	require('../MyDB.php');
									
									$Query="select tbl_employee.LeaveDays, sum(tbl_leaverequest.LeaveDaysA) as LL FROM tbl_leaverequest INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_leaverequest.EmployeeID WHERE Username='$EmployeeUsername'";
									$Result=mysqli_query($con,$Query);
									
									while($Row=mysqli_fetch_array($Result))
									{
										$ActualL=$Row['LeaveDays'];
										$Leave=$Row['LL'];
									
										$Final=$ActualL - $Leave;
										if($Final==0)
										{
								?>
                                 <div class="form-group">
                                 	<label> Available Leave </label>
                                    <input type="text" name="Approve" value="<?php echo $Row['LeaveDays']; ?>"  class="form-control" readonly="readonly">
                                 </div>
                                <?php 	
										}
										else
										{
								?>
                                 <div class="form-group">
                                 	<label> Available Leave </label>
                                    <input type="text" name="Approve" value="<?php echo $Final; ?>" class="form-control" readonly="readonly">
                                 </div>
                                <?php 
										}
										}
								 ?>
                                 <div class="form-group">
                                    <label> Leave Reason </label>
                                    <textarea type="text" name="Remarks" rows="3" placeholder="Enter Leave Reason" class="form-control" required=""></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label> Approved </label>
                                     <input type="text" name="Approve" value="Pending" class="form-control" readonly="readonly">
                                 </div>
                                 <div class="ln_solid"></div>
                                 <button class="btn btn-success" type="submit">Submit</button>
                                 <button class="btn btn-primary" type="button">Cancel</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
         </div>
    </div>
    
</body>
</html>
