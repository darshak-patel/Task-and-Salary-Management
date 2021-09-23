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
      <title>Salary Achivement</title>
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
                              <h2>Salary & Achivement</h2>
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            	<form class="form-horizontal form-label-left" method="post" action="AddSalaryAchivementCode.php">
                                 <div class="form-group">
                                    <label> Select Designation </label>
                                    <select id="SelectOne" name="Designation" class="form-control">
                                    	<option value="">Select One</option>
                                    	<option value="SalesManager">Sales Manager</option>
                                        <option value="TeamLeader">Team Leader</option>
                                        <option value="Employee">Employee</option>
                                    </select>
                                 </div>
                                 <div class="form-group">
                                  <!---------------------------- Sales Manager ---------------------------->
                                     <div id="SalesManager" class="MyForm" style="display:none">
                                  
                                         	<div class="form-group">
                                                <label for="first-name" class="control-label col-md-3">From Date: </label>
                                                <div class="col-md-9">
                                                   <input type="date" id="FromDateSM" name="FromDateSM" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name" class="control-label col-md-3">To Date: </label>
                                                <div class="col-md-9">
                                                   <input type="date" id="ToDateSM" name="ToDateSM" onChange="return CheckSM()" class="form-control">
                                                </div>
                                            </div>
                                      
                                     </div>
                                     <div id="EmpDisplaySM" class="center-block" style="float:none">
                                                
                                     </div> 
                            	  <!---------------------------- Sales Manager ---------------------------->
                                     
                        	<!----------------------------  Team Leader ---------------------------->
                                     <div id="TeamLeader" class="MyForm" style="display:none">
                                   
                                         	<div class="form-group">
                                                <label for="first-name" class="control-label col-md-3">From Date: </label>
                                                <div class="col-md-9">
                                                   <input type="date" id="FromDateTL" name="FromDateTL" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name" class="control-label col-md-3">To Date: </label>
                                                <div class="col-md-9">
                                                   <input type="date" id="ToDateTL" name="ToDateTL" onChange="return CheckTeamLeader()" class="form-control">
                                                </div>
                                            </div>
                                      
                                     </div>
                                     <div id="EmpDisplayTL" class="center-block" style="float:none">
                                                
                                     </div> 
                             <!----------------------------  Team Leader ---------------------------->
                             
                              <!---------------------------- Emplyoee ---------------------------->
                                     <div id="Employee" class="MyForm" style="display:none">
                                     	
                                         	<div class="form-group">
                                                <label for="first-name" class="control-label col-md-3">From Date: </label>
                                                <div class="col-md-9">
                                                   <input type="date" id="FromDate" name="FromDate" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="first-name" class="control-label col-md-3">To Date: </label>
                                                <div class="col-md-9">
                                                   <input type="date" id="ToDate" name="ToDate" onChange="return Check()" class="form-control">
                                                </div>
                                            </div>
                                        
                                     </div>
                                     
                                         <div id="EmpDisplay" class="center-block" style="float:none">
                                                
                                     	 </div> 
                                     
                              <!---------------------------- Emplyoee ---------------------------->
                                 </div>
                                 <div class="form-group">
                                    <label> Target Achive </label>
                                    <select name="TargetAchive" class="form-control" required>
                                    	<option value="">Select One</option>
                                    	<option>Yes</option>
                                        <option>No</option>
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
    </div><br /><br /><br /><br /><br />
<script>

/********** SELECT OPTION **********/
$(function() 
{
	$('#SelectOne').change(function()
	{
    	$('.MyForm').hide();
    	$('#' + $(this).val()).show();
    });
});
/********** SELECT OPTION **********/


/********** DATE SELECTION FROM AND TO - SALES MANAGER **********/
function CheckSM()
{
		var FromDateSM = document.getElementById('FromDateSM').value;
		var ToDateSM = document.getElementById('ToDateSM').value;
    	var dataString = 'FromDateSM='+FromDateSM+'&ToDateSM='+ToDateSM;
	 
    	$.ajax({
            	type:"POST",
            	url:"DataSearchSM.php",
            	data:dataString,
            	cache:false,
            	success: function(html){
                  $('#EmpDisplaySM').html(html);
             	}
           	});
           return false;
}
/********** DATE SELECTION FROM AND TO - SALES MANAGER **********/


/********** DATE SELECTION FROM AND TO - TEAM LEADER **********/
function CheckTeamLeader()
{
		var FromDateTL = document.getElementById('FromDateTL').value;
		var ToDateTL = document.getElementById('ToDateTL').value;
    	var dataString = 'FromDateTL='+FromDateTL+'&ToDateTL='+ToDateTL;
	 
    	$.ajax({
            	type:"POST",
            	url:"DataSearchTeamLeader.php",
            	data:dataString,
            	cache:false,
            	success: function(html){
                  $('#EmpDisplayTL').html(html);
             	}
           	});
           return false;
}
/********** DATE SELECTION FROM AND TO - TEAM LEADER **********/


/********** DATE SELECTION FROM AND TO - EMPLYOEE **********/
function Check()
{
		var FromDate = document.getElementById('FromDate').value;
		var ToDate = document.getElementById('ToDate').value;
    	var dataString = 'FromDate='+FromDate+'&ToDate='+ToDate;
	 
    	$.ajax({
            	type:"POST",
            	url:"DataSearch.php",
            	data:dataString,
            	cache:false,
            	success: function(html){
                  $('#EmpDisplay').html(html);
             	}
           	});
           return false;
}
/********** DATE SELECTION FROM AND TO - EMPLYOEE **********/
</script> 
</body>
</html>