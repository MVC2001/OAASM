
<?php
include("../include/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> Advisors Account</title>
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
                                <i class="uil-user" style="color:white;font-size:30px;font-weight: bold;"></i>
                                <span style="color:white">ADVISORS ACCOUNT PANNEL </span>
                            </a>
                        </li>

          <!------------advisor account----------->
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-home-alt" style="color:white;font-size:40px"></i>
                                <span style="color:white;margin-left:20px"><b>BACK HOME</b> </span>
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
            
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->
                    <!-- form content Content-->
                    <div class="card shadow-sm" style="width: 997px;margin-top: 20px;">
                       <div class="container-fluid text-success text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <br><br>
                                <h4 style="color: teal;font-weight: bold;"><center>Advisors Account</center></h4>
                                 <span> <a href="Enroll_newAdvisor.php"><button class="btn btn-primary" style="margin-left:780px">AddNew Advisor</button></a></span>
                                 <br>
                                  <input class = "form-control" id = "demo" type = "text" placeholder = "Seach here,..">
                                <br>
                                <table class="table table-bordered  datatable mdi-table-search" style="font-size: 17px;">
                                    <thead>
                                        <tr>
                                            <th>No#</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>School</th>
                                            <th>Department</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="test">
                                        <tr>
                                            <?php 
                                            $count_advisors =1;
                 $select_advisor_data = "select * from advisor_tbl" or die(mysqli_error($connect));
                 $result = mysqli_query($connect,$select_advisor_data);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>       
                          <tr>
                           <td class="text-center"><?php echo $count_advisors;?></td>
                              <td class="text-center"><?php echo $row['adv_id'];?></td>
                              <td class="text-center"><?php echo $row['name'];?></td>
                              <td class="text-center"><?php echo $row['position'];?></td>
                              <td class="text-center"><?php echo $row['school'];?></td>
                              <td class="text-center"><?php echo $row['depertment'];?></td>
                              <td class="text-center"><?php echo $row['role'];?></td>
                                  <td><a href="advisor_profile.php?adv_id=<?php echo $row['adv_id'] ?>"><button class="btn btn-success"><i class="uil-eye" style="color:darkgreen;font-size:15px;font-weight: bold;"></i></button></a>
                                 <span><a href="Edit_advisor.php?adv_id=<?php echo $row['adv_id'] ?>"><button class="btn btn-warning"><i class="uil-edit" style="color:darkgreen;font-size:15px;font-weight: bold;"></i></button>
                                 </span> <span><a href="delete_advisor.php?adv_id=<?php echo $row['adv_id'] ?>"><button class="btn btn-danger"><i class="uil-cancel" style="color:darkgreen;font-size:15px;font-weight: bold;"></i></button>
                             </span></td>
                                        </tr>
                                       <?php $count_advisors++; ?>
                            <?php } } else {
  echo "0 results";
} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       </div>
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

      <script>
         $(document).ready(function(){
            $("#demo").on("keyup", function() {
               var value = $(this).val().toLowerCase();
               $("#test tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
               });
            });
         });
      </script>

    </body>
</html>
