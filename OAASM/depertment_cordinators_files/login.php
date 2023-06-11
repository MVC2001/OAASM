
<?php
session_start();

include("./include/connection.php");

if(isset($_POST['admin_login'])){
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $data_select = "select * from cordinator_tbl where email = '{$email}' and
    password = '{$password}';";

  $result = mysqli_query($connect,$data_select);

  $number = mysqli_num_rows($result);

if($number > 0){

  $row = mysqli_fetch_assoc($result);

  if($row['email']  === $email && $row['password'] === $password){

    session_start();
    $_SESSION['cridential']  = $row;
    $_SESSION['role'] = $row['role'];

    header("location:Dashboard.php");
    exit();

  } else {

    echo "<div class='alert alert-success' role='alert'>
  Hello Admin Your Are Successfull Login!!!
   </div>";  
}
}
else {
  echo "<div class='alert alert-danger' role='alert'>
  Hello Sory!! Don't Have An Access To Login,Please Enter Valid Email And Password The Login
 </div>"; 
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cordninator-login</title>
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
   <!--- My links go here-------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./allStyles.css" rel="stylesheet">
    <!---- Ends Here------------->
</head>

<body style="background-color:lightgray" 
<br><br><br>
<h4 style="color:darkgreen;"><center><strong>ADMIN LOGIN </strong></center></h4>
<center><p class="shadow" style="color:darkgreen;"><br>This login pannel is for <strong>Admin</strong> only<br><br></center>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card shadow" style="height:150px;width:500px;margin-top:10px;margin-left:370px;border-radius:120px">

<!-- Button for login -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" 
style="margin-left:100px;width:300px;margin-top:57px;border-radius:90px">
  Login now
</button>
</div>
</div>
</div>
</div>
</div>






<!-- login Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border: 3px solid teal;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
            <div class="form-group">
                <label class="form-label">Email</label>
                <input  class="form-control"  type="email" name="email" required placeholder="" reserved autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="password" required placeholder="" reserved autocomplete="off">
            </div>
            <br>
            <button type="submit" name="admin_login" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<a href="../index.php"><button type="button" class="btn btn-primary">Go home</button></a>
      </div>
    </div>
  </div>
</div>


            <!--------footer--------------->
            <div class="container-fluid  text-white text-center" style="height: 350px;margin-top: 100px;background-color:#1550a3;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                <br>
                <h4 style="font-size: 32px;">
                    <center>ONLINE ACADEMIC ADVISORY SYSTEM.</center>
                    <br>
                </h4>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                       <h4 style="font-size: 25px;"><b> About us.</b></h4>
                    </div>
                    <div class="col-md-4">
                      <h4 style="font-size: 25px;"><b>Services.</b> </h4>
                    </div>
                    <div class="col-md-4">
                       <h4 style="font-size: 25px;"><b> Our Team.</b></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        Instagram +0682131140.
                    </div>
                    <div class="col-md-4">
                        Chating service.
                    </div>
                    <div class="col-md-4">
                    EstHer Mdoe.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        Telegram +0682131140.
                    </div>
                    <div class="col-md-4">
                      Consultation.
                    </div>
                    <div class="col-md-4">
                        Shadya Abdulmajid
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        Twitter +0786858433.
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    Omary Ipombo.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        Whatsapp +068231140.
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        Mudhihir H. Nyema.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        Musa Aroni.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                      Laura Laurein.
                    </div>
                </div>
                <br>
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
 

</body>

</html>