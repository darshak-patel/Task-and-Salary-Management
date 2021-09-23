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
      <title>Update Emplyoee Attandance</title>
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
            <?php
				require("../MyDB.php");
				
				$ID=$_GET['ID'];
				
				$Query="select * from tbl_attendance where AttendanceID='$ID'";
				$Result=mysqli_query($con,$Query);
				
				while($row=mysqli_fetch_array($Result))
				{
					$Date=$row['Date'];
					$EmployeeID=$row['EmployeeID'];
					$AttendancePA=$row['AttendancePA'];
					$Remarks=$row['Remarks'];
				}
			?>
            
            <div class="right_col" role="main">
            	<div class="row">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-block" style="float:none">
                    	<div class="x_panel">
                        	<div class="x_title">
                              <h2>Update Emplyoee Attandance</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            	<form class="form-horizontal form-label-left" method="post" action="UpdateEmplyoeeAttandanceCode.php">
                                 <div class="form-group">
                                    <label> Date </label>
                                    <input type="hidden" name="ID" value="<?php echo $ID;?>" class="form-control">
                                     <input type="date" name="Date" value="<?php echo $Date;?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> Employee Name </label>
                                     <input type="text" name="EmployeeID" value="<?php echo $EmployeeID;?>" class="form-control" readonly="readonly">
                                 </div>
                                 <div class="form-group">
                                    <label> Product Price </label>
                                     <select name="AttendancePA" class="form-control">
                                    	<option value="<?php echo $AttendancePA; ?>"><?php echo $AttendancePA; ?></option>
                                        <option>Present</option>
                                        <option>Absent</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Remarks </label>
                                     <textarea type="text" rows="3" name="Remarks" class="form-control" required=""><?php echo $Remarks; ?></textarea>
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
    </div><br /><br /><br /><br />
    
</body>
</html>
