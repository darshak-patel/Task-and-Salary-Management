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
               
            </div>
            <!-- /page content -->
            
         </div><br><br><br><br><br><br>
    </div>
    
</body>
</html>