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
      <title>Add Target</title>
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
                              <h2>Add Target</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            	<form class="form-horizontal form-label-left" method="post" action="AddTargetCode.php">
                                 <div class="form-group">
                                    <label> Product Name </label>
                                    <select name="ProductID" class="form-control">
                                    	<option value="">Select One</option>
                                    	<?php
											require("../MyDB.php");
											
											$Query="select * from tbl_product";
											$Result=mysqli_query($con,$Query);
											
											while($row=mysqli_fetch_array($Result))
											{
										?>
                                    	<option value="<?php echo $row['ProductID']; ?>"><?php echo $row['ProductName']; ?></option>
                                        <?php } ?>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label>Target</label>
                                    <input type="text" name="Target" placeholder="Enter Target" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" name="TargetDescription" rows="3" placeholder="Enter Description" class="form-control" required=""></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label>Sales Manager Insentive</label>
                                    <input type="text" name="SalesManagerInsntv" placeholder="Enter Sales Manager Insentive" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label>Team Leader Insentive</label>
                                    <input type="text" name="TeamLeaderInsntv" placeholder="Enter Team Leader Insentive" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label>Emplyoee Insentive</label>
                                    <input type="text" name="EmplyoeeInsntv" placeholder="Enter Emplyoee Insentive" class="form-control" required="">
                                 </div>
                                 <div class="form-group">
                                    <label>Month</label>
                                    <select name="Month" class="form-control">
                                    	<option value="">Select One</option>
                                    	<option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label>Year</label>
                                    <select name="Year" class="form-control">
                                    	<option value="">Select One</option>
                                    	<option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                        <option>2029</option>
                                        <option>2030</option>
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
    </div><br /><br />
    
</body>
</html>