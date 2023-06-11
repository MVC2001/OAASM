<?php
session_start();
include('./include/connection.php');

//group 1
if(isset($_POST["insert_stud_chart_sms1"])){
    $text_message =$_POST["text_message"];
    $category =$_POST["category"];


    $insert_chart_data ="INSERT INTO stud_texts_tbl  (text_message,category)
      VALUES('$text_message','$category');";

  if (mysqli_query($connect, $insert_chart_data)) {

    echo "<div class='alert alert-success'>Message sent successfull</div>";
    header("location:Text_area.php");
    exit();
  } 
}




//group 2
if(isset($_POST["insert_stud_chart_sms2"])){
    $text_message =$_POST["text_message"];
     $category =$_POST["category"];

    $insert_chart_data ="INSERT INTO stud_texts_tbl  (text_message,category)
       VALUES('$text_message','$category');";

  if (mysqli_query($connect, $insert_chart_data)) {
    echo "<div class='alert alert-success'>Message sent successfull</div>";
    header("location:Text_area.php");
    exit();
  } 
}


//group 3
if(isset($_POST["insert_stud_chart_sms3"])){
    $text_message =$_POST["text_message"];
     $category =$_POST["category"];

    $insert_chart_data ="INSERT INTO stud_texts_tbl  (text_message,category)
        VALUES('$text_message','$category');";

  if (mysqli_query($connect, $insert_chart_data)) {
    echo "<div class='alert alert-success'>Message sent successfull</div>";
    header("location:Text_area.php");
    exit();
  } 
}


//group 4
if(isset($_POST["insert_stud_chart_sms4"])){
    $text_message =$_POST["text_message"];
     $category =$_POST["category"];

    $insert_chart_data ="INSERT INTO stud_texts_tbl  (text_message,category)
        VALUES('$text_message','$category');";

  if (mysqli_query($connect, $insert_chart_data)) {
    echo "<div class='alert alert-success'>Message sent successfull</div>";
    header("location:Text_area.php");
    exit();
  } 
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>student send message chart pannel</title>
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







<!---role  for group1------------------------------------------------------------------------------------------------------------------------>
<?php 
if ($_SESSION['role'] == 1){ ?>
<!-----ends role-->
  
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                    <span class="d-none d-lg-block"><p style="color: red;"></b></p></span>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>


            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <!--=================my side  start here ======= Sidebar ======= -->
                    <aside id="sidebar" class="sidebar" style="background-color:#1550a3">
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#">
                                    <i class="bi bi-caret-down-square-fill"></i>
                                    <span>STUDENTS CHAT PANNEL(Group 1)</span>
                                </a>
                            </li><br>
                            <hr>
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill"></i><span>GO HOME</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="../index.php" style="color:white;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                    </aside>
                 </div>
                  </ul>
             </nav></header>
               <!--=================================== End of Drop down Side Bar Links==========================================-->
            

    <!------======text view===-->
    <main id="main" class="main">
        <h3>
            <center>STUDENT TEXT AREA FOR GROUP 1</center>
        </h3>
        <hr>
        <div class="container-fluid shadow">
            <div class="row">
                <div class="col-md-7">
             <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <form action="" method="POST">
                        <textarea type="text" required name="text_message" placeholder="type text here" style="border-radius: 20px;height: 150px;margin-top: 30px;width: 250px;"></textarea>
                   <br>
                        <div class="form-group">
                                        <label class="form-label">Add role</label>
                                        <select type="text" class="form-select"name="category"  autocomplete="off" style="height:fit-content;border-radius: 40px" required>
                                           <option selected></option>
                                           <option>1</option>
                                       </select>
                          </div>
                   <br>
                   <button type="submit" name="insert_stud_chart_sms1" class="btn btn-primary" style="margin-left:90px">send</button>
                   </form>
                    </div>
                    <div class="col-md-6">
                        <p style="margin-top: 100px;"><center>Sent message</center></p>
                        <?php
                        $display_sms ="SELECT * FROM stud_texts_tbl where category=1";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>      
                        <textarea class="shadow" type="" style="margin-top: 5px;height:150px;width: 230px;">
                        <?php echo $row['text_message']?>
                        </textarea><br>
                        <button class="btn btn-secondary" style="margin-left: 05px;"><b> <?php echo $row['created_at']?></b></button>
                        <a href="delete_sms.php?text_id=<?php echo $row["text_id"]?>"><br><button class="btn btn-danger" style="border-radius:30px">Delete</button></a></td>
                        <hr>
                        <?php } }?>
                    </div>
                </div>
             </div>
                </div>
                <div class="col-md-5" style="background-color: lightslategrey;">
                   <br>
                        <br>
                        <h4 style="color: white;"><center>Incoming Messages</center></h4><hr>
                        <table class="border">
                            <thead>
                            </thead>
                            <tbody>
                             <?php
                             $count=1;
                        $display_sms ="SELECT * FROM advisors_texts_tbl where category=1";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>   
                       <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:30px">View(<?php echo $count++?>)</button>
                       <hr>
                        <?php } }?>
                        <tr>
       </tbody>
        </table>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-----------Ends Here Now------------------------------>
    </div>
    </div>
<!--Modal for view incoming text  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border: 3px solid teal;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Incoming message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
         $count=1;
     $display_sms ="SELECT * FROM advisors_texts_tbl where category=1";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>   
                           <button class="btn btn-secondary" style="margin-left: 60px;"><b> <?php echo $row['created_at']?></b></button>
                        <textarea class="shadow" type="" style="margin-top: 5px;height:150px;width: 230px;margin-left:53px;border-radius:10px">
                        <?php echo $row['text_message']?>
                        </textarea>
                        <a href="delete_incoming_sms.php?text_id=<?php echo $row["text_id"]?>"><button class="btn btn-danger" style=";margin-left:280px;border-radius:30px">Delete</button></a></td>
                        <hr>
                   <?php } }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 

    <?php }   ?>
    <!----------role ends------>







<!---role  for group2----------------------------------------------------------------------------------------------------------------------->
<?php 
if ($_SESSION['role'] == 2){ ?>
 <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                    <span class="d-none d-lg-block"><p style="color: red;"></b></p></span>
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

                    <!--=================my side bard start here ======= Sidebar ======= -->
                    <aside id="sidebar" class="sidebar" style="background-color:#1550a3">
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#" style="color:#1550a3">
                                    <i class="bi bi-caret-down-square-fill"></i>
                                    <span>STUDENTS CHAT PANNEL</span>
                                </a>
                            </li><br>
                            <hr>
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill" style="color:white"></i><span>GO HOME</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="../index.php" style="color:white;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Logout</span>
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
        <h3>
            <center>STUDENT TEXT AREA(Group 2)</center>
        </h3>
        <hr>
        <div class="container-fluid shadow">
            <div class="row">
                <div class="col-md-7">
             <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <form action="" method="POST">
                        <textarea type="text" required name="text_message" placeholder="type text here" style="border-radius: 20px;height: 150px;margin-top: 30px;width: 250px;"></textarea>
                    <br>
                        <div class="form-group">
                                        <label class="form-label">Add role</label>
                                        <select type="text" class="form-select"name="category"  autocomplete="off" style="height:fit-content;border-radius: 40px" required>
                                           <option selected></option>
                                           <option>2</option>
                                       </select>
                          </div>
                   <br>
                   <button type="submit" name="insert_stud_chart_sms2" class="btn btn-primary" style="margin-left:90px">send</button>
                   </form>
                    </div>
                    <div class="col-md-6">
                        <p style="margin-top: 100px;"><center>Sent message</center></p>
                        <?php
                        $display_sms ="SELECT * FROM stud_texts_tbl where category=2";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>      
                        <textarea class="shadow" type="" style="margin-top: 5px;height:150px;width: 230px;">
                        <?php echo $row['text_message']?>
                        </textarea>
                        <button class="btn btn-secondary" style="margin-left: 50px;"><b> <?php echo $row['created_at']?></b></button>
                        <a href="deletegroup2.php?text_id=<?php echo $row["text_id"]?>"><button class="btn btn-danger" style="border-radius:30px">Delete</button></a></td>
                        <hr>
                        <?php } }?>
                    </div>
                </div>
             </div>
                </div>
                <div class="col-md-5" style="background-color: lightslategrey;">
                   <br>
                        <br>
                        <h4 style="color: white;"><center>Incoming Messages</center></h4><hr>
                        <table class="border">
                            <thead>
                            </thead>
                            <tbody>
                             <?php
                             $count=1;
                        $display_sms ="SELECT * FROM advisors_texts_tbl where category=2";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>   
                       <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:30px">View(<?php echo $count++?>)</button>
                       <hr>
                        <?php } }?>
                        <tr>
       </tbody>
        </table>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-----------Ends Here Now------------------------------>
    </div>
    </div>




<!--Modal for view incoming text  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border: 3px solid teal;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Incoming message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
         $count=1;
     $display_sms ="SELECT * FROM  advisors_texts_tbl where category=2";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>   
                           <button class="btn btn-secondary" style="margin-left: 55px;"><b> <?php echo $row['created_at']?></b></button>
                        <textarea class="shadow" type="" style="margin-top: 5px;height:150px;width: 230px;margin-left:53px;border-radius:20px">
                        <?php echo $row['text_message']?>
                        </textarea>
                        <a href="deleteIncoming2.php?text_id=<?php echo $row["text_id"]?>"><button class="btn btn-danger" style=";margin-left:280px;border-radius:30px">Delete</button></a></td>
                        <hr>
                   <?php } }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    

<?php } ?>
<!--------ends-------------------->













<!---role  for group3---------------------------------------------------------------------------------------------------------------------------->
<?php 
if ($_SESSION['role'] == 3){ ?>
 <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                    <span class="d-none d-lg-block"><p style="color: red;"></b></p></span>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>

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
                    <aside id="sidebar" class="sidebar" style="background-color:#1550a3">
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#" style="color:#1550a3">
                                    <i class="bi bi-caret-down-square-fill"></i>
                                    <span style="color:teal">GROUP3 CHAT PANNEL</span>
                                </a>
                            </li><br>
                            <hr>
                            <li class="nav-item">
                                <a class="nav-link collapsed" 
                                    href="../index.php">
                                    <i class="bi bi-arrow-right-square-fill" style="color:white"></i><span>GO HOME</span><i
                                        class="bi bi-chevron-right ms-auto"></i>
                                </a>
                              
                            </li>
                    </aside>
                 </div>
                  </ul>
             </nav></header>
               <!--=================================== End of Drop down Side Bar Links==========================================-->
            

    <!-------- GROUP 3========================================-->
    <main id="main" class="main">
        <h3>
            <center>STUDENT TEXT AREA(Group 3)</center>
        </h3>
        <hr>
        <div class="container-fluid shadow">
            <div class="row">
                <div class="col-md-7">
             <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <form action="" method="POST">
                        <textarea type="text" required name="text_message" placeholder="type text here" style="border-radius: 20px;height: 150px;margin-top: 30px;width: 250px;"></textarea>
                  <br>
                        <div class="form-group">
                                        <label class="form-label">Add role</label>
                                        <select type="text" class="form-select"name="category"  autocomplete="off" style="height:fit-content;border-radius: 40px" required>
                                           <option selected></option>
                                           <option>3</option>
                                       </select>
                          </div>
                   <br>
                   <button type="submit" name="insert_stud_chart_sms3" class="btn btn-primary" style="margin-left:90px">send</button>
                   </form>
                    </div>
                    <div class="col-md-6">
                        <p style="margin-top: 100px;"><center>Sent message</center></p>
                        <?php
                        $display_sms ="SELECT * FROM stud_texts_tbl where category=3";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>      
                        <textarea class="shadow" type="" style="margin-top: 5px;height:150PX;width: 230px;">
                        <?php echo $row['text_message']?>
                        </textarea>
                        <button class="btn btn-secondary" style="margin-left: 10px;"><b> <?php echo $row['created_at']?></b></button>
                        <a href="delete3_sms.php?text_id=<?php echo $row["text_id"]?>"><button class="btn btn-danger" style="border-radius:30px">Delete</button></a></td>
                        <hr>
                        <?php } }?>
                    </div>
                </div>
             </div>
                </div>
                <div class="col-md-5" style="background-color: lightslategrey;">
                   <br>
                        <br>
                        <h4 style="color: white;"><center>Incoming Messages</center></h4><hr>
                        <table class="border">
                            <thead>
                            </thead>
                            <tbody>
                             <?php
                             $count=1;
                        $display_sms ="SELECT * FROM advisors_texts_tbl where category=3";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>   
                       <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:30px">View(<?php echo $count++?>)</button>
                       <hr>
                        <?php } }?>
                        <tr>
       </tbody>
        </table>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-----------Ends Here Now------------------------------>
    </div>
    </div>




<!--Modal for view incoming text  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border: 3px solid teal;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Incoming message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
         $count=1;
     $display_sms ="SELECT * FROM advisors_texts_tbl where category=3";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>   
                           <button class="btn btn-secondary" style="margin-left: 55px;"><b> <?php echo $row['created_at']?></b></button>
                        <textarea class="shadow" type="" style="margin-top: 5px;height:150PX;width: 230px;margin-left:53px;border-radius:20px">
                        <?php echo $row['text_message']?>
                        </textarea>
                        <a href="delete_incoming_sms3.php?text_id=<?php echo $row["text_id"]?>"><button class="btn btn-danger" style=";margin-left:280px;border-radius:30px">Delete</button></a></td>
                        <hr>
                   <?php } }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!--------ends-------------------->








<!---role  for group 4--------------------------------------------------------------------------------------------------------------------->
<?php 
if ($_SESSION['role'] == 4){ ?>
 <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">
            <div class="d-flex align-items-center justify-content-between">
                    <span class="d-none d-lg-block"><p style="color: red;"></b></p></span>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>
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
                    <aside id="sidebar" class="sidebar" style="background-color:#1550a3">
                        <ul class="sidebar-nav" id="sidebar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="#" style="color:#1550a3">
                                    <i class="bi bi-caret-down-square-fill"></i>
                                    <span>GROUP 4 CHAT PANNEL</span>
                                </a>
                            </li><br>
                            <hr>
                            <li class="nav-item">
                                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                    href="#">
                                    <i class="bi bi-arrow-right-square-fill" style="color:white"></i><span>GO HOME</span><i
                                        class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                    <li>
                                        <a href="../index.php" style="color:white;">
                                            <i
                                                class="bi bi-arrow-right-square-fill"></i><span>Logout</span>
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
        <h3>
            <center>STUDENT TEXT AREA(Group 4)</center>
        </h3>
        <hr>
        <div class="container-fluid shadow">
            <div class="row">
                <div class="col-md-7">
             <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    <form action="" method="POST">
                        <textarea type="text" required name="text_message" placeholder="type text here" style="border-radius: 20px;height: 150px;margin-top: 30px;width: 250px;"></textarea>
                   <br>
                        <div class="form-group">
                                        <label class="form-label">Add role</label>
                                        <select type="text" class="form-select"name="category"  autocomplete="off" style="height:fit-content;border-radius: 40px" required>
                                           <option selected></option>
                                           <option>4</option>
                                       </select>
                          </div>
                   <br>
                   <button type="submit" name="insert_stud_chart_sms4" class="btn btn-primary" style="margin-left:90px">send</button>
                   </form>
                    </div>
                    <div class="col-md-6">
                        <p style="margin-top: 100px;"><center>Sent message</center></p>
                        <?php
                        $display_sms ="SELECT * FROM stud_texts_tbl where category=4";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>      
                        <textarea class="shadow" type="" style="margin-top: 5px;height:150px;width: 230px;">
                        <?php echo $row['text_message']?>
                        </textarea>
                        <button class="btn btn-secondary" style="margin-left: 10px;"><b> <?php echo $row['created_at']?></b></button>
                        <a href="delete_sms4.php?text_id=<?php echo $row["text_id"]?>"><button class="btn btn-danger" style="border-radius:30px">Delete</button></a></td>
                        <hr>
                        <?php } }?>
                    </div>
                </div>
             </div>
                </div>
                <div class="col-md-5" style="background-color: lightslategrey;">
                   <br>
                        <br>
                        <h4 style="color: white;"><center>Incoming Messages</center></h4><hr>
                        <table class="border">
                            <thead>
                            </thead>
                            <tbody>
                             <?php
                             $count=1;
                        $display_sms ="SELECT * FROM advisors_texts_tbl where category=4";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>   
                       <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left:30px">View(<?php echo $count++?>)</button>
                       <hr>
                        <?php } }?>
                        <tr>
       </tbody>
        </table>
                </div>
            </div>
        </div>
        </div>
    </main>
    <!-----------Ends Here Now------------------------------>
    </div>
    </div>

<!--Modal for view incoming text  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border: 3px solid teal;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Incoming message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
         $count=1;
     $display_sms ="SELECT * FROM advisors_texts_tbl where category=4";
                       $result = mysqli_query($connect,$display_sms);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>   
                           <button class="btn btn-secondary" style="margin-left: 90px;"><b> <?php echo $row['created_at']?></b></button>
                        <textarea class="shadow" type="" style="margin-top: 5px;height:160px;width: 230px;margin-left:53px;border-radius:10px">
                        <?php echo $row['text_message']?>
                        </textarea>
                        <a href="delete_incoming_sms4.php?text_id=<?php echo $row["text_id"]?>"><button class="btn btn-danger" style=";margin-left:280px;border-radius:30px">Delete</button></a></td>
                        <hr>
                   <?php } }?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!--------ends-------------------->




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