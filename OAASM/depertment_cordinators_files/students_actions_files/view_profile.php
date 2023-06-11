<?php
session_start();
include("../include/connection.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Student profile</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Vendor CSS Files -->
    <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets1/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets1/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets1/vendor/simple-datatables/style.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets1/css/style.css" rel="stylesheet">
   
</head>

<body onload="myFunction()" style="margin:0;">
    <!-------Pre loader--------->
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="animate-bottom">

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div><!-- E============================nd Logo --------------------->


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

                    <!--=================my side start here ======= Sidebar ======= -->
                    <aside id="sidebar" class="sidebar" style="background-color:#1550a3">
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-caret-down-square-fill"></i>
                                    <span>STUDENT PROFILE</span>
                                </a>
                            </li><br>
                            <hr>

                            <!---------=======Home Modal Here Now--===============================--->
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>BACK HOME</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="Student_account.php" style="color:white;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Back now</span>
                                        </a>
                                    </li>
                                </ul>
                           </li>
                            <!--==================== End Home Modal Here ================================= -->
                    </aside>
                    <!--=================================== End of Drop down Side Bar Links==========================================-->
    </div>



    <!-------- Modal For Update of Customer=============================================-->
    <main id="main" class="main">
        <h3>
            <center>STUDENT PROFILE</center>
        </h3>
        <hr>
        <form action="" method="POST">
            <div class="container-fluid">
                <?php
                $select_student_data = "select * from student_tbl where stud_id = '" .$_GET['stud_id']. "'" or die(mysqli_error($connect));
                $result = mysqli_query($connect, $select_student_data);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>

                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Fullname</label>
                                <input class="form-control" type="text" name="name" value="<?php echo $row['name']; ?>" style="border-radius: 20px;height:60px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;" autocomplete="off"><br>
                            </div>
                            <div class="col-md-4">
                               <div class="form-group">
                                <label class="form-label">Year_ofStudy</label>
                                <input class="form-control" type="text" name="year_ofstudy" value="<?php echo $row['year_ofstudy']; ?>" style="border-radius: 20px;height:60px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;" autocomplete="off"><br>
                     </div>
                        </div>
                            <div class="col-md-4">
                                  <div class="form-group">
                                     <label class="form-label"> School</label>
                                <input class="form-control" type="text" name="school" value="<?php echo $row['school']; ?>" style="border-radius: 20px;height:60px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;" autocomplete="off"><br>
                           </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <label class="form-label">Depertment</label>
                                <input class="form-control" type="text" name="depertment" value="<?php echo $row['depertment']; ?>" style="border-radius: 20px;height:60px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;" autocomplete="off"><br>
                            </div>
                            <div class="col-md-4">
                               <div class="form-group">
                                <label class="form-label">Course</label>
                                <input class="form-control" type="text" name="course" value="<?php echo $row['course']; ?>" style="border-radius: 20px;height:60px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;" autocomplete="off"><br>
                     </div>
                        </div>
                            <div class="col-md-4">
                                  <div class="form-group">
                                     <label class="form-label"> Group_Number</label>
                                <input class="form-control" type="text" name="role" value="<?php echo $row['role']; ?>" style="border-radius: 20px;height:60px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;" autocomplete="off"><br>
                           </div>
                            </div>
                        </div>


                     <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">Username</label>
                                <input class="form-control" type="text" name="username" value="<?php echo $row['username']; ?>" style="border-radius: 20px;height:60px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;" autocomplete="off"><br>
                            </div>
                            
                            <div class="col-md-6">
                                  <div class="form-group">
                                     <label class="form-label">Password</label>
                                <input class="form-control" type="text" name="password" value="<?php echo $row['password']; ?>" style="border-radius: 20px;height:60px;box-shadow: rgba(0, 0, 0, 0.15) 0px 15px 25px, rgba(0, 0, 0, 0.05) 0px 5px 10px;" autocomplete="off"><br>
                           </div>
                            </div>
                        </div>


                        </div>
                    <?php }
                } ?>
            </div>
          
        </form>
    </main>
    <!-----------Ends Here Now------------------------------>
    </div>
    </div>




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
    <!------Script For----Pre Loader-------------------------------->
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 80);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>
    <!-----------------Ends Here------------------------------->

</body>

</html>