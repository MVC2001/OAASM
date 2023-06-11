<?php
session_start();
include("../include/connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>advisor send message chart pannel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="../AllStyles.css" rel="stylesheet">
</head>

<body>










<!---role one for advisors 1-------------------------------------------------------------------------------------------------------------->
<?php 
if ($_SESSION['role'] == 'Group1'){ ?>
<!-----ends role-->
  
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                    <span class="d-none d-lg-block"></span>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- E============================nd Logo --------------------->


            <!-----============---Search Bar-----------------==============================--------->
           
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                    </li>
                    <!--======================== End seach  sectoion================== -->

                    <!--=================my side bard start here ======= Sidebar ======= -->
                    <aside id="sidebar" class="sidebar">
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <i class="bi bi-caret-down-square-fill"></i>
                                    <span>ADVISOR CHAT PANNEL</span>
                                </a>
                            </li><br>
                            <hr>

                            <!---------=======Chat Modal Here Now--===============================--->
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>Chat_account</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="text_area.html" style="color:darkblue;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Browser_now</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>



<!---------=======sign days Modal Here Now--===============================--->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
        href="#">
        <i class="bi bi-arrow-right-square-fill"></i><span>Enroll_new_sign</span><i
            class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="text_area.html" style="color:darkblue;">
                <i
                    class="bi bi-arrow-right-square-fill"></i><span>Enroll_here</span>
            </a>
        </li>
    </ul>
</li>



<!---------=======announcement Modal Here Now--===============================--->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
        href="#">
        <i class="bi bi-arrow-right-square-fill"></i><span>Add_any_announcement</span><i
            class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="text_area.html" style="color:darkblue;">
                <i
                    class="bi bi-arrow-right-square-fill"></i><span>Comment now</span>
            </a>
        </li>
    </ul>
</li>

<!-----------logout modal------->
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>GO_HOME</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="../index.php" style="color:darkblue;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Logout_now</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </aside>
                 </div>
                  </ul>
             </nav></header>
               <!--=================================== End of Drop down Side Bar Links==========================================-->
            


    <!-------- Modal For Ordering of House Keepers---Main =============================================-->
    <main id="main" class="main">
        <h3 style="color: teal;">
            <center>ADVISOR HOME</center>
        </h3>
        <hr>
        <div class="container-fluid" style="margin-top: 70px;">
            <div class="row">
                <div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Messages available </P>
       <b> (58575)</b>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Students available </P>
       <b> (58575)</b>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Student signs available </P>
       <b> (58575)</b>
    </div>
</div>
   </div>
    </div>
            </div>
        </div>
        </div>
    </main>
    <!-----------Ends Here Now------------------------------>
    </div>
    </div>


<?php } ?>
<!------advisors ends--------->









<!-----advisors role 2--------------------------------------------------------------------------------------------------------------------->
<?php if($_SESSION['role'] == 'Group2'){  ?>

  <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                    <span class="d-none d-lg-block"></span>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- E=====nd Logo --->


            <!-----============---Search Bar--------->
           
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                    </li>
                    <!--======================== End seach  sectoion================== -->

                    <!--=================my side bard start here ======= Sidebar ======= -->
                    <aside id="sidebar" class="sidebar"  style="background-color:teal">
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <i class="bi bi-caret-down-square-fill"></i>
                                    <span>ADVISOR CHAT PANNEL</span>
                                </a>
                            </li><br>
                            <hr>

                            <!---------=======Chat Modal Here Now--===============================--->
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>Chat_account</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="text_area.html" style="color:darkblue;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Browser_now</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>



<!---------=======sign days Modal Here Now--===============================--->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
        href="#">
        <i class="bi bi-arrow-right-square-fill"></i><span>Enroll_new_sign</span><i
            class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="text_area.html" style="color:darkblue;">
                <i
                    class="bi bi-arrow-right-square-fill"></i><span>Enroll_here</span>
            </a>
        </li>
    </ul>
</li>



<!---------=======announcement Modal Here Now--===============================--->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
        href="#">
        <i class="bi bi-arrow-right-square-fill"></i><span>Add_any_announcement</span><i
            class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="text_area.html" style="color:darkblue;">
                <i
                    class="bi bi-arrow-right-square-fill"></i><span>Comment now</span>
            </a>
        </li>
    </ul>
</li>

<!-----------logout modal------->
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>GO_HOME</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="../index.php" style="color:darkblue;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Logout_now</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </aside>
                 </div>
                  </ul>
             </nav></header>
               <!--=================================== End of Drop down Side Bar Links==========================================-->
            


    <!-------- Modal For Ordering of House Keepers---Main =============================================-->
    <main id="main" class="main">
        <h3 style="color: teal;">
            <center>ADVISOR HOME</center>
        </h3>
        <hr>
        <div class="container-fluid" style="margin-top: 70px;">
            <div class="row">
                <div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Messages available </P>
       <b> (58575)</b>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Students available </P>
       <b> (58575)</b>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Student signs available </P>
       <b> (58575)</b>
    </div>
</div>
   </div>
    </div>
            </div>
        </div>
        </div>
    </main>
    <!-----------Ends Here Now------------------------------>
    </div>
    </div>

<?php  }?>
<!---------------ends here---------------------->














<!-----advisors role 3------------------------------------------------------------------------------------------------------------------->
<?php if($_SESSION['role'] == 'Group3'){  ?>
  <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                    <span class="d-none d-lg-block"></span>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- E============================nd Logo --------------------->


            <!-----============---Search Bar---------->
           
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                    </li>
                    <!--======================== End seach  sectoion================== -->

                    <!--=================my side bard start here ======= Sidebar ======= -->
                    <aside id="sidebar" class="sidebar">
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <i class="bi bi-caret-down-square-fill"></i>
                                    <span>ADVISOR CHAT PANNEL</span>
                                </a>
                            </li><br>
                            <hr>

                            <!---------=======Chat Modal Here Now--===============================--->
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>Chat_account</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="text_area.html" style="color:darkblue;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Browser_now</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>



<!---------=======sign days Modal Here Now--===============================--->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
        href="#">
        <i class="bi bi-arrow-right-square-fill"></i><span>Enroll_new_sign</span><i
            class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="text_area.html" style="color:darkblue;">
                <i
                    class="bi bi-arrow-right-square-fill"></i><span>Enroll_here</span>
            </a>
        </li>
    </ul>
</li>



<!---------=======announcement Modal Here Now--===============================--->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
        href="#">
        <i class="bi bi-arrow-right-square-fill"></i><span>Add_any_announcement</span><i
            class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="text_area.html" style="color:darkblue;">
                <i
                    class="bi bi-arrow-right-square-fill"></i><span>Comment now</span>
            </a>
        </li>
    </ul>
</li>

<!-----------logout modal------->
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>GO_HOME</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="../index.php" style="color:darkblue;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Logout_now</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </aside>
                 </div>
                  </ul>
             </nav></header>
               <!--=================================== End of Drop down Side Bar Links==========================================-->
            


    <!-------- Modal For Ordering of House Keepers---Main =============================================-->
    <main id="main" class="main">
        <h3 style="color: teal;">
            <center>ADVISOR HOME</center>
        </h3>
        <hr>
        <div class="container-fluid" style="margin-top: 70px;">
            <div class="row">
                <div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Messages available </P>
       <b> (58575)</b>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Students available </P>
       <b> (58575)</b>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Student signs available </P>
       <b> (58575)</b>
    </div>
</div>
   </div>
    </div>
            </div>
        </div>
        </div>
    </main>
    <!-----------Ends Here Now------------------------------>
    </div>
    </div>


<?php  }?>
<!---------------ends here---------------------->










<!-----advisors role 4---------------------------------------------------------------------------------------------------------------------->
<?php if($_SESSION['role'] == 'Group4'){  ?>

   <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                    <span class="d-none d-lg-block"></span>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- E============================nd Logo --------------------->


            <!-----============---Search Bar-----------------==============================--------->
           
            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item d-block d-lg-none">
                        <a class="nav-link nav-icon search-bar-toggle " href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                    </li>
                    <!--======================== End seach  sectoion================== -->

                    <!--=================my side bard start here ======= Sidebar ======= -->
                    <aside id="sidebar" class="sidebar">
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <i class="bi bi-caret-down-square-fill"></i>
                                    <span>ADVISOR CHAT PANNEL</span>
                                </a>
                            </li><br>
                            <hr>

                            <!---------=======Chat Modal Here Now--===============================--->
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>Chat_account</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="text_area.html" style="color:darkblue;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Browser_now</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>



<!---------=======sign days Modal Here Now--===============================--->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
        href="#">
        <i class="bi bi-arrow-right-square-fill"></i><span>Enroll_new_sign</span><i
            class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="text_area.html" style="color:darkblue;">
                <i
                    class="bi bi-arrow-right-square-fill"></i><span>Enroll_here</span>
            </a>
        </li>
    </ul>
</li>



<!---------=======announcement Modal Here Now--===============================--->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
        href="#">
        <i class="bi bi-arrow-right-square-fill"></i><span>Add_any_announcement</span><i
            class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="text_area.html" style="color:darkblue;">
                <i
                    class="bi bi-arrow-right-square-fill"></i><span>Comment now</span>
            </a>
        </li>
    </ul>
</li>

<!-----------logout modal------->
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>GO_HOME</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="../index.php" style="color:darkblue;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Logout_now</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </aside>
                 </div>
                  </ul>
             </nav></header>
               <!--=================================== End of Drop down Side Bar Links==========================================-->
            


    <!-------- Modal For Ordering of House Keepers---Main =============================================-->
    <main id="main" class="main">
        <h3 style="color: teal;">
            <center>ADVISOR HOME</center>
        </h3>
        <hr>
        <div class="container-fluid" style="margin-top: 70px;">
            <div class="row">
                <div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Messages available </P>
       <b> (58575)</b>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Students available </P>
       <b> (58575)</b>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-success text-center" style="width: 270px;height: 200px;border-radius: 40px;">
        <br><br><br><br><hr>
        <P><br>Student signs available </P>
       <b> (58575)</b>
    </div>
</div>
   </div>
    </div>
            </div>
        </div>
        </div>
    </main>
    <!-----------Ends Here Now------------------------------>
    </div>
    </div>


<?php  }?>
<!---------------ends here---------------------->


    <!-----my script------------------------------------------------>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>