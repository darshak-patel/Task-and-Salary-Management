

			 <!-- top navigation -->
            <div class="top_nav">
               <div class="nav_menu">
                  <nav class="clearfix">
                     <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                     </div>
                     <div class="logo-header">
                        <a href="AdminHome.php">
                        	<img src="assets/images/T&SJK.jpg" alt="" />
                        </a>
                     </div>
                    
                     <ul class="nav navbar-nav navbar-right">
                        <li class="">
                           <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                           <?php echo $AdminUser; ?>
                           <span class=" fa fa-angle-down"></span>
                           </a>
                           <ul class="dropdown-menu dropdown-usermenu pull-right">
                             <!-- <li><a href="ProfileUpdate.php">Profile</a></li>-->
                              <li><a href="LogOut.php"><i class="fa fa-sign-out pull-right"></i>Log Out</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            <!-- /top navigation -->
            
            	<!--  top bar -->
            <div class="top-horizontal-menu sticky-hormenu">
               <div class="left_col scroll-view">
                  <!-- sidebar menu -->
                  <div id="sidebar-menu" class="main_menu_top hidden-print main_menu">
                     <div class="menu_section">
                        
                        <ul class="nav side-menu">
                           <li>
                              <a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                              	 <li><a href="AddAdmin.php">Add Admin</a></li>
                                 <li><a href="ManageAdmin.php">Manage Admin</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-edit"></i> Department & Designation <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddDepartment.php">Add Department</a></li>
                                 <li><a href="ManageDepartment.php">Manage Department</a></li>
                                 <li><a href="AddDesignation.php">Add Designation</a></li>
                                 <li><a href="ManageDesignation.php">Manage Designation</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-desktop"></i> Shift <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddShift.php">Add Shift</a></li>
                                 <li><a href="ManageShift.php">Manage Shift</a></li>
                                 <li><a href="AddShiftAllot.php">Shift Allot</a></li>
                                 <li><a href="ManageShiftAllot.php">Manage Shift Allot</a></li>
                              </ul>
                           </li>
                           <!--<li><a href="media_gallery.html"><i class="fa fa-clone"></i> Media Gallery</a></li>-->
                           <li>
                              <a><i class="fa fa-table"></i> Emplyoee <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddEmplyoee.php">Add Emplyoee</a></li>
                                 <li><a href="ManageEmplyoee.php">Manage Emplyoee</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-bar-chart-o"></i> Products & Sell <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddProduct.php">Add Products</a></li>
                                 <li><a href="ManageProduct.php">Manage Products</a></li>
                                 <li><a href="AddTarget.php">Target</a></li>
                                 <li><a href="ManageTarget.php">Manage Target</a></li>
                                 <li><a href="TargetAssign.php">Target Assign</a></li>
                                 <li><a href="ManageTargetAssign.php">View Target Assign</a></li>
                              </ul>
                           </li>
                           
                            <li>
                              <a><i class="fa fa-windows"></i> Selling Product View <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="ViewProductSellBySalesManager.php">View Product Sell By Sales Manager</a></li>
                                 <li><a href="ViewProductSellByTeamLeader.php">View Product Sell By Team Leader</a></li>
                                 <li><a href="ViewProductSellByEmplyoee.php">View Product Sell By Emplyoee</a></li>
                              </ul>
                           </li>
                           <!--<li>
                              <a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="#level1_1">Level One</a>
                                 <li>
                                    <a>Level One<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                       <li class="sub_menu"><a href="https://www.bestdesignstudio.in/">Level Two</a>
                                       </li>
                                       <li><a href="#level2_1">Level Two</a>
                                       </li>
                                       <li><a href="#level2_2">Level Two</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li><a href="#level1_2">Level One</a>
                                 </li>
                              </ul>
                           </li>-->
                           <!--<li><a href="https://www.bestdesignstudio.in/"><i class="fa fa-laptop"></i> Landing Page</a></li>-->
                        </ul>
                     </div>
                  </div>
                  <!-- /sidebar menu -->
               </div>
            </div>
            <!--  top bar -->
     
 		<!-- jQuery -->
      <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="assets/vendors/nprogress/nprogress.js"></script>
      <!-- Chart.js -->
      <script src="assets/vendors/Chart.js/dist/Chart.min.js"></script>
      <!-- gauge.js -->
      <script src="assets/vendors/gauge.js/dist/gauge.min.js"></script>
      <!-- bootstrap-progressbar -->
      <script src="assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
      <!-- iCheck -->
      <script src="assets/vendors/iCheck/icheck.min.js"></script>
      <!-- Skycons -->
      <script src="assets/vendors/skycons/skycons.js"></script>
      <!-- Flot -->
      <script src="assets/vendors/Flot/jquery.flot.js"></script>
      <script src="assets/vendors/Flot/jquery.flot.pie.js"></script>
      <script src="assets/vendors/Flot/jquery.flot.time.js"></script>
      <script src="assets/vendors/Flot/jquery.flot.stack.js"></script>
      <script src="assets/vendors/Flot/jquery.flot.resize.js"></script>
      <!-- Flot plugins -->
      <script src="assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
      <script src="assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
      <script src="assets/vendors/flot.curvedlines/curvedLines.js"></script>
      <!-- DateJS -->
      <script src="assets/vendors/DateJS/build/date.js"></script>
      <!-- JQVMap -->
      <script src="assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
      <script src="assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
      <script src="assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
      <!-- bootstrap-daterangepicker -->
      <script src="assets/vendors/moment/min/moment.min.js"></script>
      <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
      
      <!-- Pace js -->
      <script type="text/javascript" src="assets/js/pace.min.js"></script>
      <!-- Custom Theme Scripts -->
      <script src="assets/js/custom.min.js"></script>