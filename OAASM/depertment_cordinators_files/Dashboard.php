
<?php
include("../include/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Cordinator dash</title>
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
            <div class="leftside-menu" style="background-color:#1550a3">

                <div class="h-100" id="leftside-menu-container" data-simplebar="" style="background-color:#1550a3">
                    <!--- Sidemenu -->
                    <ul class="side-nav">
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt" style="color:white;font-size:30px"></i>
                                <span style="color:white;font-size:12px"><b>CARDINATOR DASHBOARD<hr></b> </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item" style="color:white"><center>Actions</center></li>

          <!------------advisor account----------->
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-user" style="color:white;font-size:30px"></i>
                                <span  style="color:white">Advisors_Account </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!-----advisors modal-->
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="advisor_actions_files/Enroll_newAdvisor.php"  style="color:white">Enroll_new_advisor</a>
                                    </li>
                                    <li>
                                        <a href="advisor_actions_files/Advisors_account.php"  style="color:white">Manage_advisors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

         <!----------student account----------->
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                                <i class="uil-user" style="color:white;font-size:30px"></i>
                                <span  style="color:white">Students_Account</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="students_actions_files/Enroll_newStudent.php"  style="color:white">Enroll_new_student</a>
                                    </li>
                                    <li>
                                        <a href="students_actions_files/Student_account.php"  style="color:white">Manage_students</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

      <!-------ends here----->
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
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                               
                            </li>     
                   <!-------header bar for search & account --->
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                   <p style="color:teal" class="shadow"><b>Account</b></p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!--view acc item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <?php 
                                            $count_advisors =1;
                                      $select_advisor_data = "select * from cordinator_tbl LIMIT 1" or die(mysqli_error($connect));
                                       $result = mysqli_query($connect,$select_advisor_data);
                                       $number = mysqli_num_rows($result);
                                       if ($number > 0) {
                                         while($row = mysqli_fetch_assoc($result)) { ?>       
                                        <span> <span><a href="EditProfile_advisor.php?id=<?php echo $row['id'] ?>"><h4><center>Account-setting</center></h4></i></a>
                                         </span>     
                                           <?php } } else {
                                           echo "0 results";
                                          } ?>
                                    </a>
                                    <!-- logout item-->
                                    <a href="logout.php" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                       <span>Logout</span></a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">

                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <!-- count for current user -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Current user:
                                 <?php
                                  $select_name ="SELECT name FROM cordinator_tbl";
                                  $result = mysqli_query($connect,$select_name);
                                 if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) { 
                                 echo $row['name'];
                                 }
                                 }
                                ?> 
                                </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <div class="row" style="margin-top:100px">
                            <div class="col-12">
                                <div class="card widget-inline">
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-sm-6 col-xl-3">
                                            <!----count card for students av-->
                                                <div class="card shadow-none m-0">
                                                    <div class="card-body text-center">
                                                           <i class="dripicons-user-group text-muted shadow" style="font-size: 50px;color:teal"></i>
                                                        <?php
                                                    $countstudent = mysqli_query($connect,"select stud_id from student_tbl") or die(mysqli_error($connect));
                                                     $user = mysqli_num_rows($countstudent);
                                                     if(empty($user) >= 0){
                                                       ?>
                                                    <h2 class="text-black mb-2 font-w600">
                                                      <?php echo $user;?>
                                                       </h2>
                                                     <?php } ?>
                                                        <p class="text-muted font-15 mb-0">Total students available</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-xl-3">
                                             <!----count card for advisors av-->
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                         <i class="dripicons-user-group text-muted shadow" style="font-size: 50px;color:teal"></i>
                                                        <?php
                                                    $countstudent = mysqli_query($connect,"select adv_id  from advisor_tbl") or die(mysqli_error($connect));
                                                     $user = mysqli_num_rows($countstudent);
                                                     if(empty($user) >= 0){
                                                       ?>
                                                    <h2 class="text-black mb-2 font-w600">
                                                      <?php echo $user;?>
                                                       </h2>
                                                     <?php } ?>
                                                        <p class="text-muted font-15 mb-0">Total advisors available</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-xl-3">
                                             <!----count card for sms of students av-->
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                            <i class="dripicons-user-group text-muted shadow" style="font-size: 50px;color:teal"></i>
                                                        <i class="dripicons-user-group text-muted shadow" style="font-size: 50px;color:teal"></i>
                                                        <?php
                                                    $countstudent = mysqli_query($connect,"select text_id  from stud_texts_tbl") or die(mysqli_error($connect));
                                                     $user = mysqli_num_rows($countstudent);
                                                     if(empty($user) >= 0){
                                                       ?>
                                                    <h2 class="text-black mb-2 font-w600">
                                                      <?php echo $user;?>
                                                       </h2>
                                                     <?php } ?>
                                                        <p class="text-muted font-15 mb-0">Total messages of students available</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-sm-6 col-xl-3">
                                             <!----count card for sms of advisor av--->
                                                <div class="card shadow-none m-0 border-start">
                                                    <div class="card-body text-center">
                                                            <i class="dripicons-user-group text-muted shadow" style="font-size: 50px;color:teal"></i>
                                                          <?php
                                                    $countstudent = mysqli_query($connect,"select text_id  from advisors_texts_tbl") or die(mysqli_error($connect));
                                                     $user = mysqli_num_rows($countstudent);
                                                     if(empty($user) >= 0){
                                                       ?>
                                                    <h2 class="text-black mb-2 font-w600">
                                                      <?php echo $user;?>
                                                       </h2>
                                                     <?php } ?>
                                                        <p class="text-muted font-15 mb-0">Total messages of advisors available</p>
                                                    </div>
                                                </div>
                                            </div>
                
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        <div class="row" style="margin-top:70px">
<div class="col-md-12">
<h4><center>ONLINE ACADEMIC ADVISORY SYSTEM</center></h4>
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
