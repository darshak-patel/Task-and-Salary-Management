<!DOCTYPE html>
<html lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Emplyoee Login Page</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600">
      <!--<link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
      <link href="EmplyoeePanel/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="EmplyoeePanel/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="EmplyoeePanel/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
      <link href="EmplyoeePanel/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
      <link href="EmplyoeePanel/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
      <link href="EmplyoeePanel/assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
      <link href="EmplyoeePanel/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link href="EmplyoeePanel/assets/css/custom.min.css" rel="stylesheet">
</head>
   <body class="login">
      <div>
         <a class="hiddenanchor" id="signup"></a>
         <a class="hiddenanchor" id="signin"></a>
         <div class="login_wrapper">
            <div class="animate form login_form">
               <section class="login_content">
                  <form method="post" action="EmplyoeePanel/LoginCode.php">
                     <h1>Emplyoee Login</h1>
                     <div>
                        <input type="text" name="Username" class="form-control" placeholder="Username" required="" />
                     </div>
                     <div>
                        <input type="password" name="Password" class="form-control" placeholder="Password" required="" />
                     </div>
                     <div align="center">
                        <input type="submit" class="btn btn-primary center-block" style="float:none" value="Log In">
                       <!-- <a class="reset_pass" href="#">Lost your password?</a>-->
                     </div>
                     <div class="clearfix"></div>
                     <div class="separator">
                      <!--  <p class="change_link">New to site?
                           <a href="#signup" class="to_register"> Create Account </a>
                        </p>-->
                        <div class="clearfix"></div>
                        <br />
                        <div>
                           <p>©2019-2020 All Rights Reserved. Task & Salary Management System</p>
                            <a class="btn btn-primary center-block" href="Admin/index.php" style="float:none">Admin Login</a>
                        </div>
                     </div>
                  </form>
               </section>
            </div>
            <div id="register" class="animate form registration_form">
               <section class="login_content">
                  <form>
                     <h1>Create Account</h1>
                     <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                     </div>
                     <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                     </div>
                     <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                     </div>
                     <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                     </div>
                     <div class="clearfix"></div>
                     <div class="separator">
                        <p class="change_link">Already a member ?
                           <a href="#signin" class="to_register"> Log in </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                           <p>©2018 All Rights Reserved. Salary Management System</p>
                        </div>
                     </div>
                  </form>
               </section>
            </div>
         </div>
      </div>
   </body>
</html>