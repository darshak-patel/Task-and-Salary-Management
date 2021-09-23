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
      <title>Admin Home</title>
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
            
            <!-- page content -->
            <div class="right_col" role="main">
               <!-- top tiles -->
               <div class="page-body">
                  <div class="row">
                     <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="x_panel bg-c-blue order-card">
                           <div class="card">
                              <div class="card-block">
                                 <h6 class="m-b-20">Orders Received</h6>
                                 <h2 class="text-right"><i class="fa fa-envelope-o"></i><span>486</span></h2>
                                 <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="x_panel bg-c-green order-card">
                           <div class="card">
                              <div class="card-block">
                                 <h6 class="m-b-20">Total Sales</h6>
                                 <h2 class="text-right"><i class="fa fa-envelope-o"></i><span>1641</span></h2>
                                 <p class="m-b-0">This Month<span class="f-right">213</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="x_panel bg-c-yellow order-card">
                           <div class="card">
                              <div class="card-block">
                                 <h6 class="m-b-20">Revenue</h6>
                                 <h2 class="text-right"><i class="fa fa-envelope-o"></i><span>$42,562</span></h2>
                                 <p class="m-b-0">This Month<span class="f-right">$5,032</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3 col-sm-6 col-xs-12">
                        <div class="x_panel bg-c-pink order-card">
                           <div class="card">
                              <div class="card-block">
                                 <h6 class="m-b-20">Total Profit</h6>
                                 <h2 class="text-right"><i class="fa fa-envelope-o"></i><span>$9,562</span></h2>
                                 <p class="m-b-0">This Month<span class="f-right">$542</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /top tiles -->
             <!--  <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                     <div class="dashboard_graph x_panel tile">
                        <div class="x_title">
                           <h2>Network Activities</h2>
                           <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                           <div id="chart_plot_01" class="demo-placeholder"></div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>-->
               <div class="row">
                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                     <div class="x_panel social-follow">
                        <div class="card">
                           <div class="card-block text-center">
                              <i class="fa fa-envelope-open text-c-blue d-block f-40"></i>
                              <h4 class="m-t-20"><span class="text-c-blue">8.62k</span> Subscribers</h4>
                              <p class="m-b-20">Your main list is growing</p>
                              <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                     <div class="x_panel social-follow">
                        <div class="card">
                           <div class="card-block text-center">
                              <i class="fa fa-twitter text-c-green d-block f-40"></i>
                              <h4 class="m-t-20"><span class="text-c-blgreenue">+40</span> Followers</h4>
                              <p class="m-b-20">Your main list is growing</p>
                              <button class="btn btn-success btn-sm btn-round">Check them out</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                     <div class="x_panel social-follow">
                        <div class="card">
                           <div class="card-block text-center">
                              <i class="fa fa-puzzle-piece text-c-pink d-block f-40"></i>
                              <h4 class="m-t-20">Business Plan</h4>
                              <p class="m-b-20">This is your current active plan</p>
                              <button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               
               
               
               <!----------  HR Leave Notification    ------------->
               	<?php 
					require("../MyDB.php");
								
					$Query1="SELECT * FROM tbl_employee INNER JOIN tbl_department ON tbl_department.DepartmentID=tbl_employee.DepartmentID where Username='$EmployeeUsername'";
					$Result1=mysqli_query($con,$Query1);
								
					while($Row1=mysqli_fetch_array($Result1))
					{
						$DepartmentName=$Row1['DepartmentName'];
					}
						if($DepartmentName=='HR')
						{
				?>
                
                <div class="row">
                  <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                     <div class="x_panel">
                        <div class="card tabs-card">
                           <div class="card-block p-0">
                              <ul role="tablist" class="nav nav-tabs md-tabs grid-tab">
                                 <li class="nav-item">
                                    <a role="tab" href="#home3" data-toggle="tab" class="nav-link" aria-expanded="false">
                                    <i class="fa fa-home"></i>
                                    	Request For Leave
                                    </a>
                                 </li>
                              </ul>
                              <div class="tab-content card-block">
                                 <div role="tabpanel" id="home3" class="tab-pane active" aria-expanded="false">
                                    <div class="table-responsive">
                                       <table class="table">
                                          <tbody>
                                             <tr>
                                                <th>Emplyoee Name</th>
                                                <th>Date From</th>
                                                <th>Date To</th>
                                                <th>Remark</th>
                                                <th>Status</th>
                                                <th></th>
                                             </tr>
                                              <?php
											 	require("../MyDB.php");
												
												$Query2="SELECT * FROM tbl_leaverequest INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_leaverequest.EmployeeID";
												$Result2=mysqli_query($con,$Query2);
												
												while($Row2=mysqli_fetch_array($Result2))
												{	
													$ID=$Row2['LeaveRequestID'];
													$ChooseL =$Row2['Approve'];
											 ?>
                                             <tr>
                                             	<td><?php echo $Row2['Name']; ?></td>
                                                <td><?php echo $Row2['DateFrom']; ?></td>
                                                <td><?php echo $Row2['DateTo']; ?></td>
                                                <td><?php echo $Row2['Remarks']; ?></td>
                                                <?php if($ChooseL=='Approved'):?>
                                                	<td><span class="label label-success"><?php echo $ChooseL; ?></span></td>
                                                <?php elseif($ChooseL=='Reject'):;?>
                                                	<td><span class="label label-danger"><?php echo $ChooseL; ?></span></td>
                                                <?php else:;?>
                                                	<td><span class="label label-warning"><?php echo $ChooseL; ?></span></td>
                                                <?php endif;?>
                                                <td><a href="ApproveLeave.php?ID=<?php echo $ID;?>" class="label label-success">Approve</a></td>
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
               
               <div class="row">
                  <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">
                     <div class="x_panel">
                        <div class="card tabs-card">
                           <div class="card-block p-0">
                              <ul role="tablist" class="nav nav-tabs md-tabs grid-tab">
                                 <li class="nav-item">
                                    <a role="tab" href="#home3" data-toggle="tab" class="nav-link" aria-expanded="false">
                                    <i class="fa fa-home"></i>
                                    Request For Shift Change
                                    </a>
                                 </li>
                              </ul>
                              <div class="tab-content card-block">
                                 <div role="tabpanel" id="home3" class="tab-pane active" aria-expanded="false">
                                    <div class="table-responsive">
                                       <table class="table">
                                          <tbody>
                                             <tr>
                                                <th>Emplyoee Name</th>
                                                <th>Currunt Shift Time</th>
                                                <th>Request Shift Time</th>
                                                <th>Status</th>
                                                <th></th>
                                             </tr>
                                              <?php
											 	require("../MyDB.php");
												
												$Query="SELECT * FROM tbl_shiftchangerequest INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_shiftchangerequest.EmployeeID";
												$Result=mysqli_query($con,$Query);
												
												while($Row=mysqli_fetch_array($Result))
												{	
													$ID=$Row['ShiftChangeReqID'];
												    $Choose =$Row['Approved'];
											 ?>
                                             <tr>
                                             	<td><?php echo $Row['Name']; ?></td>
                                                <td><?php echo $Row['CurruntShift']; ?></td>
                                                <td><?php echo $Row['RequestedShift']; ?></td>
                                                <?php if($Choose=='Approved'):?>
                                                	<td><span class="label label-success"><?php echo $Choose; ?></span></td>
                                                <?php elseif($Choose=='Reject'):;?>
                                                	<td><span class="label label-danger"><?php echo $Choose; ?></span></td>
                                                <?php else:;?>
                                                	<td><span class="label label-warning"><?php echo $Choose; ?></span></td>
                                                <?php endif;?>
                                                <td><a href="ApprovedShift.php?ID=<?php echo $ID;?>" class="label label-success">Approve</a></td>
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
               
                <?php
						   			}
									else
									{}
						   ?>
               
               <!----------  HR Leave Notification    ------------->
               
               
               
               <!----------  Sales Manager Target   ------------->
               	<?php 
					require("../MyDB.php");
								
					$Query1="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
					$Result1=mysqli_query($con,$Query1);
								
					while($Row1=mysqli_fetch_array($Result1))
					{
						$DesignationName1=$Row1['DesignationName'];
					}
						if($DesignationName1=='Sales Manager')
						{
				?>
               	<div class="row">
                  <div class="col-sm-8 col-xs-12 col-lg-8 col-md-8 center-block" style="float:none">
                     <div class="x_panel">
                        <div class="card tabs-card">
                           <div class="card-block p-0">
                              <ul role="tablist" class="nav nav-tabs md-tabs grid-tab">
                                 <li class="nav-item">
                                    <a role="tab" href="#home3" data-toggle="tab" class="nav-link" aria-expanded="false">
                                    <i class="fa fa-home"></i>
                                    	New Target Request By <span class="bg-red"> Admin</span>
                                    </a>
                                 </li>
                              </ul>
                              <div class="tab-content card-block">
                                 <div role="tabpanel" id="home3" class="tab-pane active" aria-expanded="false">
                                    <div class="table-responsive">
                                       <table class="table table-bordered">
                                          <tbody>
                                             <tr>
                                             	<th>Product Name</th>
                                                <th>Target </th>
                                             </tr>
                                              <?php
											 	require("../MyDB.php");
												
												$Query="SELECT * FROM ((tbl_targetassign INNER JOIN tbl_product ON tbl_product.ProductID=tbl_targetassign.ProductID) INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_targetassign.EmployeeID) where Username='$EmployeeUsername'";
												$Result=mysqli_query($con,$Query);
												
												while($Row=mysqli_fetch_array($Result))
												{	$TID=$Row['AssignID'];
											 ?>
                                             <tr>
                                             	<td><?php echo $Row['ProductName']; ?></td>
                                             	<td><?php echo $Row['TargetA']; ?></td>
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
                  <?php
						   			}
									else
									{}
						   ?>
                
                
               <!----------  Sales Manager Target   ------------->
               
               <!----------  Team Leader Target   ------------->
               	<?php 
					require("../MyDB.php");
								
					$Query1="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
					$Result1=mysqli_query($con,$Query1);
								
					while($Row1=mysqli_fetch_array($Result1))
					{
						$DesignationName1=$Row1['DesignationName'];
					}
						if($DesignationName1=='Team Leader')
						{
				?>
               	<div class="row">
                  <div class="col-sm-8 col-xs-12 col-lg-8 col-md-8 center-block" style="float:none">
                     <div class="x_panel">
                        <div class="card tabs-card">
                           <div class="card-block p-0">
                              <ul role="tablist" class="nav nav-tabs md-tabs grid-tab">
                                 <li class="nav-item">
                                    <a role="tab" href="#home3" data-toggle="tab" class="nav-link" aria-expanded="false">
                                    <i class="fa fa-home"></i>
                                    	New Target Request By <span class="bg-red"> Sales Manager </span>
                                    </a>
                                 </li>
                              </ul>
                              <div class="tab-content card-block">
                                 <div role="tabpanel" id="home3" class="tab-pane active" aria-expanded="false">
                                    <div class="table-responsive">
                                       <table class="table table-bordered">
                                          <tbody>
                                             <tr>
                                             	<th>Product Name</th>
                                                <th>Target </th>
                                             </tr>
                                              <?php
											 	require("../MyDB.php");
												
												$Query="SELECT * FROM ((tbl_targetassignteamleader INNER JOIN tbl_employee ON tbl_employee.EmployeeID=tbl_targetassignteamleader.EmployeeID) INNER JOIN tbl_product ON tbl_product.ProductID=tbl_targetassignteamleader.ProductID) WHERE Username='$EmployeeUsername'";
												$Result=mysqli_query($con,$Query);
												
												while($Row=mysqli_fetch_array($Result))
												{
											 ?>
                                             <tr>
                                                <td><?php echo $Row['ProductName']; ?></td>
                                             	<td><?php echo $Row['TargetA']; ?></td>
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
                  <?php
						   			}
									else
									{}
						   ?>
                
                
               <!----------  Team Leader Target   ------------->
               
               
               
               
             
            </div>
            <!-- /page content -->
            
         </div>
    </div><br><br><br><br>
    
</body>
</html>