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
      <title>Update Emplyoee</title>
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
                    	<div class="x_panel m-auto">
                        	<div class="x_title">
                              <h2>Update Emplyoee</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            	<form class="form-horizontal form-label-left" method="post" action="UpdateEmplyoeeCode.php">
                                	 <?php
										require("../MyDB.php");
										
										$IDE=$_GET['ID'];
										
										$Query="select * from ((tbl_employee INNER JOIN tbl_department ON tbl_department.DepartmentID=tbl_employee.DepartmentID) 
																			 INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID) where EmployeeID='$IDE'";
										$Result=mysqli_query($con,$Query);
										
										while($row=mysqli_fetch_array($Result))
										{	
											
											$Name=$row['Name'];
											$Address=$row['Address'];
											$MobileNo=$row['MobileNo'];
											$AlterMobNo=$row['AlterMobNo'];
											$EmailID=$row['EmailID'];
											$AadharNo=$row['AadharNo'];
											$Username=$row['Username'];
											$Password=$row['Password'];
											$Active=$row['Active'];
											$BasicPay=$row['BasicPay'];
											
											$DepartmentID=$row['DepartmentID'];
											$DepartmentName=$row['DepartmentName'];
											
											$DesignationID=$row['DesignationID'];
											$DesignationName=$row['DesignationName'];
											
											$LeaveDays=$row['LeaveDays'];
										}
									?>
                                 <div class="form-group">
                                    <label> Name</label>
                                    <input type="hidden" name="IDE" class="form-control" value="<?php echo $IDE; ?>" />
                                    <input type="text" name="Name" value="<?php echo $Name; ?>" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label> Address</label>
                                    <textarea type="text" name="Address" rows="3" class="form-control"><?php echo $Address; ?></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label> Mobile No</label>
                                    <input type="text" name="MobileNo" maxlength="10" value="<?php echo $MobileNo; ?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> Alter Mob No</label>
                                    <input type="text" name="AlterMobNo" maxlength="10" value="<?php echo $AlterMobNo; ?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> EmailID</label>
                                    <input type="text" name="EmailID" value="<?php echo $EmailID; ?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> Aadhar No</label>
                                    <input type="text" name="AadharNo" value="<?php echo $AadharNo; ?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> Username</label>
                                    <input type="text" name="Username" value="<?php echo $Username; ?>" class="form-control" readonly="readonly">
                                 </div>
                                 <div class="form-group">
                                    <label> Password</label>
                                    <input type="text" name="Password" value="<?php echo $Password; ?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> Active </label>
                                    <select name="Active" class="form-control">
                                    	<option value="<?php echo $Active; ?>"><?php echo $Active; ?></option>
                                    	<option>Yes</option>
                                        <option>No</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                 	<label> Basic Pay</label>
                                    <input type="text" name="BasicPay" value="<?php echo $BasicPay; ?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> Department Name </label>
                                    <select name="DepartmentID" class="form-control">
                                    	<option value="<?php echo $DepartmentID; ?>"><?php echo $DepartmentName; ?></option>
                                    	<?php
											require("../MyDB.php");
											
											$Query="select * from tbl_department";
											$Result=mysqli_query($con,$Query);
											
											while($Row=mysqli_fetch_array($Result))
											{
										?>
                                    	<option value="<?php echo $Row['DepartmentID']; ?>"><?php echo $Row['DepartmentName']; ?></option>
                                        <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Designation Name </label>
                                    <select name="DesignationID" class="form-control">
                                    	<option value="<?php echo $DesignationID; ?>"><?php echo $DesignationName; ?></option>
                                    	<?php
											require("../MyDB.php");
											
											$Query1="select * from tbl_designation";
											$Result1=mysqli_query($con,$Query1);
											
											while($Row1=mysqli_fetch_array($Result1))
											{
										?>
                                    	<option value="<?php echo $Row1['DesignationID']; ?>"><?php echo $Row1['DesignationName']; ?></option>
                                        <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Leave Days</label>
                                    <input type="text" name="LeaveDays" maxlength="2" value="<?php echo $LeaveDays; ?>" class="form-control" required="">
                                 </div>
                                 <div class="ln_solid"></div>
                                 <button class="btn btn-success" type="submit">Update</button>
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