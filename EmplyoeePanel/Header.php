

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
                           <?php echo $EmployeeUsername; ?>
                           <span class=" fa fa-angle-down"></span>
                           </a>
                           <ul class="dropdown-menu dropdown-usermenu pull-right">
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
                           <li>
                              <a><i class="fa fa-home"></i> Attandance <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddMultipleAttandance.php">Add Attandance</a></li>
                                 <li><a href="ViewEmplyoeeAttandance.php">View Emplyoee Attandance</a></li>
                              </ul>
                           </li>
                             <?php
						   			}
									else
									{}
						   ?>
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
                           <li>
                              <a><i class="fa fa-windows"></i> Salary Achivement <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddSalaryAchivement.php">Add Salary Achivement</a></li>
                                 <li><a href="ManageSalaryAchivement.php">Manage Salary Achivement</a></li>
                              </ul>
                           </li>
                             <?php
						   			}
									else
									{}
						   ?>
                           <li>
                              <a><i class="fa fa-edit"></i> Shift Approve <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="ChangeShift.php"> Change Shift </a></li>
                                 <li><a href="ViewShiftApproved.php">View Shift Approved</a></li>
                              </ul>
                           </li>
                           <li>
                              <a><i class="fa fa-desktop"></i> Leave Request <span class="fa fa-chevron-down"></span></a>
                               <ul class="nav child_menu">
                               		 <li><a href="LeaveApplication.php"> Leave Application </a></li>
                                 	<li><a href="ViewLeaveApproved.php">View Leave Approved</a></li>
                               </ul>
                           </li>
                           <?php 
						   		require("../MyDB.php");
								
						   		$Query="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
								$Result=mysqli_query($con,$Query);
								
								while($Row=mysqli_fetch_array($Result))
								{
									$DesignationName=$Row['DesignationName'];
								}
									if($DesignationName=='Employee')
									{
						   ?>
                           <li>
                              <a><i class="fa fa-desktop"></i> Sell Product <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddSellingProduct.php">Add Selling Product</a></li>
                                 <li><a href="ManageSellProduct.php">Manage Selling Product</a></li>
                              </ul>
                           </li>
                           <?php
						   			}
									else
									{}
						   ?>
                           
                           <?php 
						   		require("../MyDB.php");
								
						   		$Query="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
								$Result=mysqli_query($con,$Query);
								
								while($Row=mysqli_fetch_array($Result))
								{
									$DesignationName=$Row['DesignationName'];
								}
									if($DesignationName=='Team Leader')
									{
						   ?>
                           <li>
                              <a><i class="fa fa-desktop"></i> Sell Product <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddSellingProductTarget.php">Add Selling Product Target</a></li>
                                 <li><a href="ManageSellingProductTarget.php">Manage Selling Product Target</a></li>
                              </ul>
                           </li>
                           <?php
						   			}
									else
									{}
						   ?>
                           <?php 
						   		require("../MyDB.php");
								
						   		$Query="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
								$Result=mysqli_query($con,$Query);
								
								while($Row=mysqli_fetch_array($Result))
								{
									$DesignationName=$Row['DesignationName'];
								}
									if($DesignationName=='Sales Manager')
									{
						   ?>
                           <li>
                              <a><i class="fa fa-desktop"></i> Sell Product <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddSellingProductTargetSM.php">Add Selling Product Target</a></li>
                                 <li><a href="ManageSellingProductTargetSM.php">Manage Selling Product Target</a></li>
                              </ul>
                           </li>
                           <?php
						   			}
									else
									{}
						   ?>
                           
                            <?php 
						   		require("../MyDB.php");
								
						   		$Query="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
								$Result=mysqli_query($con,$Query);
								
								while($Row=mysqli_fetch_array($Result))
								{
									$DesignationName=$Row['DesignationName'];
								}
									if($DesignationName=='Team Leader')
									{
						   ?>
                           <li>
                              <a><i class="fa fa-bar-chart-o"></i> Targets <span class="fa fa-chevron-down"></span></a>
                               <ul class="nav child_menu">
                              	<li><a href="AssignToEmplyoee.php">Assign Target To Emplyoee</a></li>
                               	<li><a href="ViewAssignTargetEmplyoee.php"> View Assign Target Emplyoee</a></li>
                                <li><a href="ViewSellProduct.php"> View Sell Product's</a></li>
                              </ul>
                           </li>
                           <?php
						   			}
									else
									{}
						   ?>
                           <?php 
						   		require("../MyDB.php");
								
						   		$Query="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
								$Result=mysqli_query($con,$Query);
								
								while($Row=mysqli_fetch_array($Result))
								{
									$DesignationName=$Row['DesignationName'];
								}
									if($DesignationName=='Employee')
									{
						   ?>
                           <li>
                              <a href="ViewProductTarget.php"><i class="fa fa-bar-chart-o"></i> Product Targets </a>
                           </li>
                           <?php
						   			}
									else
									{}
						   ?>
                           <?php 
						   		require("../MyDB.php");
								
						   		$Query="SELECT * FROM tbl_employee INNER JOIN tbl_designation ON tbl_designation.DesignationID=tbl_employee.DesignationID where Username='$EmployeeUsername'";
								$Result=mysqli_query($con,$Query);
								
								while($Row=mysqli_fetch_array($Result))
								{
									$DesignationName=$Row['DesignationName'];
								}
									if($DesignationName=='Sales Manager')
									{
						   ?>
                           <li>
                              <a><i class="fa fa-bar-chart-o"></i> Team Leader Target <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AssignTargetTeamLeader.php">Assign Target Team Leader</a></li>
                                 <li><a href="ViewTargetTeamLeader.php">View Target Team Leader</a></li>
                                 <li><a href="ViewSellTargetByTeamLeader.php">View Sell Target By Team Leader</a></li>
                              </ul>
                           </li>
                            <?php
						   			}
									else
									{}
						   ?>
                           <!--<li><a href="media_gallery.html"><i class="fa fa-clone"></i> Media Gallery</a></li>-->
                          <!-- <li>
                              <a><i class="fa fa-table"></i> Emplyoee <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="AddEmplyoee.php">Add Emplyoee</a></li>
                                 <li><a href="ManageEmplyoee.php">Manage Emplyoee</a></li>
                              </ul>
                           </li>-->
                           <!--<li>
                              <a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="chartjs.html">Chart JS</a></li>
                                 <li><a href="chartjs2.html">Chart JS2</a></li>
                                 <li><a href="morisjs.html">Moris JS</a></li>
                                 <li><a href="echarts.html">ECharts</a></li>
                              </ul>
                           </li>-->
                           <!-- <li>
                              <a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                              <ul class="nav child_menu">
                                 <li><a href="projects.html">Projects</a></li>
                                 <li><a href="profile.html">Profile</a></li>
                                 <li><a href="page_403.html">403 Error</a></li>
                                 <li><a href="page_404.html">404 Error</a></li>
                                 <li><a href="page_500.html">500 Error</a></li>
                                 <li><a href="plain_page.html">Plain Page</a></li>
                                 <li><a href="login.html">Login Page</a></li>
                              </ul>
                           </li>-->
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
     