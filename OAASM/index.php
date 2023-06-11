<?php
session_start();

include("./include/connection.php");

 
if(isset($_POST['student_email_and_password_data'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $data_select = "select * from student_tbl  where username = '{$username}' and
    password = '{$password}';";

  $result = mysqli_query($connect,$data_select);

  $number = mysqli_num_rows($result);

if($number > 0){

  $row = mysqli_fetch_assoc($result);

  if($row['username']  === $username && $row['password'] === $password){

    session_start();
    $_SESSION['cridential']  = $row;
    $_SESSION['role'] = $row['role'];

    header("location:./students_files/Text_area.php");
    exit();

  } else {

    echo "<div class='alert alert-success' role='alert'>
  Hello Admin Your Have Logged in Successfully!!!
   </div>";  
}
}
else {
  echo "<div class='alert alert-danger' role='alert'>
Please Enter Valid Username  And Password then Login
 </div>"; 
} 
}

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
        <!--links here-->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        >
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

        <link href="./allStyles.css" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <!---ends here----->
    </head>
    <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-white  text-center" style="width:1200px;height: 400px;margin-left: 20px
                    ;margin-top: 20px;background-color:#be611d">
                            <h4 class="shadow" style="color: white;font-size:35px;margin-top: 50px;">
                                <center>ONLINE ACADEMIC ADVISORY SYSTEM </center>    </h4>
  <!---------------slide show--------------------->
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/imgs/img1.jpg" class="d-block w-100" alt="..." style="height: 300px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/imgs/img1.jpg" class="d-block w-100" alt="..."  style="height: 300px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/imgs/img1.jpg" class="d-block w-100" alt="..."  style="height: 300px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
  <!-------login modals -------------------------->
         </div>
                    </div>
                    <div class="row">
                        <div class="card text-center"  style="border-radius:130px;width:1000px;height: 130px;margin-left: 140px;background-color:white;box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;">
                            <div class="container" style="height: 160px;margin-top: 30px;">
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <button
                                            class="btn btn-secondary shadow"
                                            style="width: 300px;height:50px;border-radius:60px"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"
                                            data-bs-whatever="@mdo"
                                        >Student login</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button
                                            class="btn btn-secondary shadow"
                                            style="width: 300px;height:50px;border-radius:60px"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1"
                                            data-bs-whatever="@mdo"
                                        >Advisor/Admin-Login</button>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------ends here---------->







            <!--------student login form modal-->
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content" style="border: 3px solid dimgray;">
                        <div class="modal-header" style="background-color: dimgray;">
                            <h5 class="modal-title" id="exampleModalLabel" style="margin-left: 100px;font-size: 32px;color: white;">Student login</h5>
                        </div>
                        <div class="modal-body">
                            <!-----tailwind form---->
                            <form class="mt-6" action="" method="POST">
                                <div class="relative mb-8">
                                    <input
                                        id="username"
                                        name="username"
                                        type="text"
                                        required
                                        autocomplete="off"
                                        class="w-full h-10 text-gray-900 placeholder-transparent border-b-2 border-gray-300 peer focus:outline-none focus:border-purple-600"
                                        placeholder=""
                                    >
                                    <label for="username" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                    Username
                                    </label>
                                </div>
                                <div class="relative mb-4">
                                    <input
                                        id="password"
                                        name="password"
                                        type="password"
                                        required
                                        autocomplete="off"
                                        class="w-full h-10 text-gray-900 placeholder-transparent border-b-2 border-gray-300 peer focus:outline-none focus:border-purple-600"
                                        placeholder=""
                                    >
                                    <label for="Password" class="absolute left-0 -top-3.5 text-gray-600 text-sm transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-2 peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                                        Password
                                    </label>
                                </div>
                                <div class="mt-6">
                                    <button type="submit" name="student_email_and_password_data" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-gray-400 rounded-md hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <!-----tailwind form ends here---->
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                                style="background-color:darkslategrey;"
                            >Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--------ends here-->







            <!--user modals--->
            <div
                class="modal fade"
                id="exampleModal1"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content" style="height: 290px;">
                        <div class="container">
                            <div class="row">
                                <p style="font-size: 35px;color: darkgreen;">
                                    <center>
                                        Your are
                                        <b>Admin</b>
                                        or
                                        <b>
                                            Advisor?
                                        </center>
                                    </b>
                                </p>
                                <br>
                                <hr>
                                <div class="col-md-6" style="margin-top: 50px;">
                                    <a href="./advisors_files/login.php">
                                        <button class="btn btn-secondary" style="width: 180px;">Advisor-login</button>
                                    </a>
                                </div>
                                <div class="col-md-6" style="margin-top: 50px;">
                                    <span>
                                        <a href="depertment_cordinators_files/login.php">
                                            <button class="btn btn-primary" style="width: 180px;">Admin-login</button>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 80px;">
                                <div class="col-md-12">
                                    <button
                                        type="button"
                                        class="btn btn-secondary"
                                        data-bs-dismiss="modal"
                                        style="margin-left: 10px;background-color: red
                                ;"
                                    >Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------ends here--------->







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
          
       
        <!---------------ends here-------->
        <!-------scrfipts------------------->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </body>
</html>
