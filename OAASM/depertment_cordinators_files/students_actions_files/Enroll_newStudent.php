
<?php
include("../include/connection.php");

//Inserts students 
if (isset($_POST["student_data"])) {
  $name = $_POST['name'];
 $year_ofstudy = $_POST['year_ofstudy'];
   $school =$_POST['school'];
   $depertment = $_POST['depertment'];
  $course = $_POST['course'];
  $role = $_POST['role'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $insert_new_student = "INSERT INTO student_tbl (name,year_ofstudy,school,depertment,course,role,username,password)
      VALUES('$name','$year_ofstudy','$school','$depertment','$course','$role','$username','$password');";

  if (mysqli_query($connect, $insert_new_student)) {
    echo "<div class='alert alert-success'>New Student  Added Successfull</div>";
    header("location:Student_account.php");
    exit();
  } else{
  echo "<div class='alert alert-danger'>wrong unsuccessfull enrollment try again</div>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Add new student page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
     

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu" style="background-color:#1550a3;">
                <div class="h-100" id="leftside-menu-container" data-simplebar="">
                    <!--- Sidemenu -->
                    <ul class="side-nav">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-user" style="color:white;font-size:30px"></i>
                                <span style="color:white">STUDENT REGISTRATION PANNEL </span>
                            </a>
                        </li>

          <!------------advisor account----------->
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-home-alt" style="color:white;font-size:40px"></i>
                                <span style="color: white;margin-left:20px">BACK HOME </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!-----advisors modal-->
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="../Dashboard.php">back now</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                </div>
            </div>
         <!-- Sidebar bar ends here -->



       <!-- ============================================================== -->
            <!-- Start Page Content here -->
      <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->
                    <!-- form content Content-->
                    <div class="card shadow-lg" style="width: 980px;height: 550px;margin-top: 20px;">
                        <form action="" method="POST">
                        <div class="container-fluid text-center text-secondary">
                            <br><h4  style="color: teal;"><center><b>Enroll new student</center></b></h4><hr>
                            <div class="row">
                     <div class="col-md-6">  <div class="form-group">
                        <label class="form-label">Fullname</label>
                        <input type="text" placeholder="" class="form-control shadow" value="" name="name" required autocomplete="off" style="border-radius: 20px;height: 77px;">
              </div>
            </div>
                    <div class="col-md-6">   
                        <div class="form-group">
                            <label class="form-label">Year of_study</label>
                            <select class="form-select"name="year_ofstudy"  autocomplete="off" style="height: 77px;border-radius: 20px"> required>
                               <option selected></option>
                               <option>year 1</option>
                               <option>year 2</option>
                               <option>year 3</option>
                               <option>year 4</option>
                               <option>others</option>
                           </select>
                               </div>
                        </div>
                            </div>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-md-4">   
                                    <div class="form-group">
                                     <label class="form-label">School</label>
                                     <select class="form-select"name="school"  autocomplete="off" style="height: 77px;border-radius: 20px"> required>
                                        <option selected></option>
                                        <option>Selb</option>
                                        <option>Sest</option>
                                        <option>Sacem</option>
                                        <option>Lmv</option>
                                    </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">   
                                        <div class="form-group">
                                            <label class="form-label">Department</label>
                                            <select class="form-select"name="depertment"  autocomplete="off" style="height: 77px;border-radius: 20px"> required>
                                               <option selected></option>
                                               <option>CSM</option>
                                               <option>SEST</option>
                                               <option>LMV</option>
                                               <option>GIS</option>
                                           </select>
                                               </div>

                                        </div>
                                        <div class="col-md-4">   
                                            <div class="form-group">
                                             <label class="form-label">Course</label>
                                             <select class="form-select"name="course"  autocomplete="off" style="height: 77px;border-radius: 20px"> required>
                                                <option selected></option>
                                                <option>ISM</option>
                                                <option>CSN</option>
                                                <option>LMV</option>
                                                <option>GIS</option>
                                            </select>
                                                </div>
                                            </div>
                            </div>
                            <div class="row" style="margin-top: 25px;">
                                <div class="col-md-4">   
                                    <div class="form-group">
                                        <label class="form-label">Assign to group number</label>
                                        <select class="form-select"name="role"  autocomplete="off" style="height: 70px;border-radius: 20px"> required>
                                           <option selected></option>
                                           <option>1</option>
                                           <option>2</option>
                                           <option>3</option>
                                           <option>4</option>
                                       </select>
                                           </div>
                                    </div>
                                    <div class="col-md-4">   
                                        <div class="form-group">
                                         <label class="form-label">Username</label>
                                         <input type="text" placeholder="" class="form-control shadow" value="" name="username" required autocomplete="off" style="height: 77px;border-radius: 20px;">
                                            </div>
                                        </div>
                                        <div class="col-md-4">   
                                            <div class="form-group">
                                             <label class="form-label">Password</label>
                                             <input type="text" placeholder="" class="form-control shadow" value="" name="password" required autocomplete="off" style="height: 77px;border-radius: 20px;">
                                                </div>
                                            </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 30px;">
                                <div class="col-md-12">
                                    <button type="submit" name="student_data" class="btn btn-primary" style="margin-left: 800px;border-radius: 40px;width: 150px;">Enroll now</button>
                                </div>
                            </div>
                        </div>   
                        </form>
                    </div>
                               
</div>
</div>
 </div> </div>
 <div class="rightbar-overlay"></div> <!-- /End-bar -->

 <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- third party js -->
        <script src="assets/js/vendor/Chart.bundle.min.js"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="assets/js/pages/demo.dashboard-projects.js"></script>
        <!-- end demo js-->

    </body>
</html>
