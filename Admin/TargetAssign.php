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
      <title>Task Assign</title>
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
                              <h2>Task Assign</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            	<form class="form-horizontal form-label-left" method="post" action="TargetAssignCode.php">
                                 <div class="form-group">
                                    <label>Product Target</label>
                                     <select name="ProductID" class="form-control">
                                    	<option value="">Select Target</option>
										<?php
                                            require("../MyDB.php");
                                            
                                            $Query="SELECT * FROM tbl_product INNER JOIN tbl_target ON tbl_target.ProductID=tbl_product.ProductID";
                                            $Result=mysqli_query($con,$Query);
                                            
                                            while($Row=mysqli_fetch_array($Result))
                                            {
                                        ?>
                                    	<option value="<?php echo $Row['ProductID']; ?>"><?php echo $Row['ProductName']; ?></option>
                                       <?php } ?>
                                   	</select>
                                 </div>
                                 <div class="form-group">
                                    <label>Target</label>
                                     <select name="TargetA" class="form-control">
                                    	<option value="">Select Target</option>
										<?php
                                            require("../MyDB.php");
                                            
                                            $Query="SELECT * FROM tbl_product INNER JOIN tbl_target ON tbl_target.ProductID=tbl_product.ProductID";
                                            $Result=mysqli_query($con,$Query);
                                            
                                            while($Row=mysqli_fetch_array($Result))
                                            {
                                        ?>
                                    	<option><?php echo $Row['Target']; ?> - <?php echo $Row['ProductName']; ?></option>
                                       <?php } ?>
                                   	</select>
                                 </div>
                                 <div class="form-group">
                                    <label>To Assign Designation</label>
                                    <select name="EmployeeID" class="form-control">
                                    	<option value="">Select Designation</option>
										<?php
                                            require("../MyDB.php");
                                            
                                            $Query1="SELECT * FROM tbl_designation INNER JOIN tbl_employee ON tbl_employee.DesignationID=tbl_designation.DesignationID where DesignationName='Sales Manager'";
                                            $Result1=mysqli_query($con,$Query1);
                                            
                                            while($Row1=mysqli_fetch_array($Result1))
                                            {
                                        ?>
                                    	<option value="<?php echo $Row1['EmployeeID']; ?>"><?php echo $Row1['Name']; ?> - <?php echo $Row1['DesignationName']; ?></option>
                                       <?php } ?>
                                   	</select>
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