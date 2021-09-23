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
      <title>Add Emplyoee</title>
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
                              <h2>Add Emplyoee</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            	<form class="form-horizontal form-label-left" method="post" action="AddEmplyoeeCode.php">
                                 <div class="form-group">
                                    <label> Name</label>
                                    <input type="text" name="Name" placeholder="Enter Name" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label> Address</label>
                                    <textarea type="text" name="Address" rows="3" placeholder="Enter Address" class="form-control" required=""></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label> Mobile No</label>
                                    <input type="text" name="MobileNo" maxlength="10" placeholder="Enter Mobile No" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label> Alter Mob No</label>
                                    <input type="text" name="AlterMobNo" maxlength="10" placeholder="Enter Alter Mob No" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label> EmailID</label>
                                    <input type="email" name="EmailID" placeholder="Enter Email ID" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label> Aadhar No</label>
                                    <input type="text" name="AadharNo" maxlength="12" placeholder="Enter Aadhar No" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label> Username</label>
                                    <input type="text" id="Username" name="Username" placeholder="Enter Username" class="form-control" required="">
                                    	<div id="UsernameResponse" class="response">
                                        	
                                        </div>
                                 </div>
                                 <div class="form-group">
                                    <label> Password</label>
                                    <input type="password" name="Password" placeholder="Enter Password" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label> Active </label>
                                    <select name="Active" class="form-control">
                                    	<option value="">Select One</option>
                                    	<option>Yes</option>
                                        <option>No</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                 	<label> Basic Pay</label>
                                    <input type="text" name="BasicPay" placeholder="Enter Basic Pay" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label> Department Name </label>
                                    <select name="DepartmentID" class="form-control">
                                    	<option value="">Select One</option>
                                    	<?php
											require("../MyDB.php");
											
											$Query="select * from tbl_department";
											$Result=mysqli_query($con,$Query);
											
											while($row=mysqli_fetch_array($Result))
											{
										?>
                                    	<option value="<?php echo $row['DepartmentID']; ?>"><?php echo $row['DepartmentName']; ?></option>
                                        <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Designation Name </label>
                                    <select name="DesignationID" class="form-control">
                                    	<option value="">Select One</option>
                                    	<?php
											require("../MyDB.php");
											
											$Query1="select * from tbl_designation";
											$Result1=mysqli_query($con,$Query1);
											
											while($row1=mysqli_fetch_array($Result1))
											{
										?>
                                    	<option value="<?php echo $row1['DesignationID']; ?>"><?php echo $row1['DesignationName']; ?></option>
                                        <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Leave Days</label>
                                    <input type="text" name="LeaveDays" maxlength="2" placeholder="Enter Leave Days" class="form-control" required="">
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

<script>
$(document).ready(function()
{
	$("#Username").keyup(function()
	{
      	var UName = $("#Username").val().trim();
      	if(UName != '')
		{
         	$("#UsernameResponse").show();
         	$.ajax({
            	url: 'DataSearch.php',
            	type: 'post',
            	data: {UName:UName},
            	success: function(response)
				{
                	if(response > 0)
					{
                    	$("#UsernameResponse").html("<span class='not-exists' style='color:red; font-weight:bold'> *Username Already Exists</span>");
                	}
					else
					{
                    	$("#UsernameResponse").html("<span class='exists' style='color:green; font-weight:bold'>Available Username</span>");
                	}
             	}
          		});
      			}
				else
				{
         			$("#UsernameResponse").hide();
      			}
    	});
 });
</script>    
</body>
</html>