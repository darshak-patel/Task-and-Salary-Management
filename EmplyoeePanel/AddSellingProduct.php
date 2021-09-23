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
      <title>Add Selling Product</title>
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
                              <h2>Add Selling Product</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            	<form class="form-horizontal form-label-left" method="post" action="AddSellingProductCode.php">
                                 <div class="form-group">
                                    <label> Product Name </label>
                                    <select name="ProductID" class="form-control">
                                    	<option value="">Select Product</option>
                                    <?php
										require("../MyDB.php");
											
										$Query="select * from ((tbl_targetassignemplyoee INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_targetassignemplyoee.EmployeeID) INNER JOIN tbl_product ON tbl_product.ProductID=tbl_targetassignemplyoee.ProductID) WHERE Username='$EmployeeUsername'";
										$Result=mysqli_query($con,$Query);
											
										while($row=mysqli_fetch_array($Result))
										{ 
									?>
                                    	<option value="<?php echo $row['ProductID']; ?>"><?php echo $row['ProductName']; ?></option>
                                    <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Product Price </label>
                                     <select name="ProductPrice" class="form-control">
                                    	<option value="">Select Product Price</option>
                                    <?php
										require("../MyDB.php");
											
										$Query="select * from ((tbl_targetassignemplyoee INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_targetassignemplyoee.EmployeeID) INNER JOIN tbl_product ON tbl_product.ProductID=tbl_targetassignemplyoee.ProductID) WHERE Username='$EmployeeUsername'";
										$Result=mysqli_query($con,$Query);
											
										while($row=mysqli_fetch_array($Result))
										{ 
									?>
                                    	<option><?php echo $row['ProductName']; ?> = <?php echo $row['ProductPrice']; ?></option>
                                    <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Target</label>
                                     <input type="text" name="Target" placeholder="Enter Target" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label> Emplyoee Name </label>
                                     <select name="EmployeeID" class="form-control">
                                    <?php
										require("../MyDB.php");
											
										$Query="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
										$Result=mysqli_query($con,$Query);
											
										while($row=mysqli_fetch_array($Result))
										{ 
									?>
                                    	<option value="<?php echo $row['EmployeeID']; ?>" selected="selected"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Selling Date </label>
                                     <input type="date" name="SellDate" value="<?php echo date("Y-m-d");?>" class="form-control" required="">
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
    </div><br /><br />
    
</body>
</html>