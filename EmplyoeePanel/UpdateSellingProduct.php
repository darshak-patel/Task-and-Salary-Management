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
      <title>Update Selling Product</title>
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
				
				$Query="SELECT * FROM (((tbl_selling INNER JOIN tbl_product ON tbl_product.ProductID=tbl_selling.ProductID) INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_selling.EmployeeID) INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID) where Username='$EmployeeUsername' and SellingID='$ID'";
				$Result=mysqli_query($con,$Query);
				
				while($row=mysqli_fetch_array($Result,MYSQLI_ASSOC))
				{
					$ProductID=$row['ProductID'];
					$ProductName=$row['ProductName'];
					$ProductPrice=$row['ProductPrice'];
					
					$Target=$row['Target'];
					
					$EID=$row['EmployeeID'];
					$Name=$row['Name'];
					
					$SellDate=$row['SellDate'];
				}
			?>
            
            <div class="right_col" role="main">
            	<div class="row">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-block" style="float:none">
                    	<div class="x_panel">
                        	<div class="x_title">
                              <h2>Update Selling Product</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            	<form class="form-horizontal form-label-left" method="post" action="UpdateSellingProductCode.php">
                                 <div class="form-group">
                                    <label> Product Name </label>
                                    <input type="hidden" name="ID" value="<?php echo $ID; ?>">
                                    <select name="ProductID" class="form-control">
                                    	<option value="<?php echo $ProductID; ?>"><?php echo $ProductName; ?></option>
                                    <?php
										require("../MyDB.php");
											
										$Query1="SELECT * FROM tbl_product";
										$Result1=mysqli_query($con,$Query1);
											
										while($row1=mysqli_fetch_array($Result1))
										{ 
									?>
                                    	<option value="<?php echo $row1['ProductID']; ?>"><?php echo $row1['ProductName']; ?></option>
                                    <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Product Price </label>
                                     <select name="ProductPrice" class="form-control">
                                    	<option value="<?php echo $ProductName; ?> = <?php echo $ProductPrice; ?>"><?php echo $ProductName; ?> = <?php echo $ProductPrice; ?></option>
                                    <?php
										require("../MyDB.php");
											
										$Query2="SELECT * FROM tbl_product";
										$Result2=mysqli_query($con,$Query2);
											
										while($row2=mysqli_fetch_array($Result2))
										{ 
									?>
                                    	<option><?php echo $row2['ProductName']; ?> = <?php echo $row2['ProductPrice']; ?></option>
                                    <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Target</label>
                                     <input type="text" name="Target" value="<?php echo $Target; ?>" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <label> Emplyoee Name </label>
                                     <select name="EmployeeID" class="form-control">
                                     	<option value="<?php echo $EID; ?>"><?php echo $Name; ?></option>
                                    <?php
										require("../MyDB.php");
											
										$Query3="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
										$Result3=mysqli_query($con,$Query3);
											
										while($row3=mysqli_fetch_array($Result3))
										{ 
									?>
                                    	<option value="<?php echo $row3['EmployeeID']; ?>" selected="selected"><?php echo $row3['Name']; ?></option>
                                    <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label> Selling Date </label>
                                     <input type="date" name="SellDate" value="<?php echo $SellDate; ?>" class="form-control">
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
    </div><br /><br />
    
</body>
</html>