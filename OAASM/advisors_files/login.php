
<?php
session_start();

include("../include/connection.php");



if(isset($_POST['advisors_email_and_password_data'])){
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $data_select = "select * from advisor_tbl where email = '{$email}' and
    password = '{$password}';";

  $result = mysqli_query($connect,$data_select);

  $number = mysqli_num_rows($result);

if($number > 0){

  $row = mysqli_fetch_assoc($result);

  if($row['email']  === $email && $row['password'] === $password){

    session_start();
    $_SESSION['cridential']  = $row;
    $_SESSION['role'] = $row['role'];

    header("location:text_area.php");
    exit();

  } else {

    echo "<div class='alert alert-success' role='alert'>
  Hello Admin Your Are Successfull Login!!!
   </div>";  
}
}
else {
  echo "<div class='alert alert-danger' role='alert'>
Please Enter Valid Email And Password Then try again 
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
        <!--links here-->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        >
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="./allStyles.css" rel="stylesheet">
        <!---ends here----->
        <title>Advisor-login</title>
    </head>
    <body style="background-color:whitesmoke;">
        <!--head img--modal here-->
        <img class="shadow" src="../assets/imgs/img1.jpg" style="height:190px;width:100%">
        <!-----------ends-->


        <!---- login--form modal-->
        <div class="container" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-12">
                    <!-----tailwind form---->
                    <h4><center>Advisor login</center></h4>
                           <br>
                    <div class="card" style="width:500px;margin-left:300px">
                    <div class="card-body">
                    <form  action="" method="POST" >
                          <div class="form-group">
                         <label class="form-label">Email</label>
                         <input  class="form-control" type="email" name="email" required placeholder="" autocomplete="off">
                          </div>
                            <div class="form-group">
                         <label class="form-label">Password</label>
                         <input class="form-control" type="password" name="password" required placeholder="" autocomplete="off">
                          </div>
                     <br>
                     <button type="submit" name="advisors_email_and_password_data" class="btn btn-primary">Lgoin</button>
                    </form>
                    </div>
                    </div>
                    <!-----tailwind form ends here---->
                </div>
            </div>
        </div>
        <!--------ends here------->
               <br>
               <a href="../index.php" style="font-size:22px;text-decoration:none;"><center><b>GO HOME</b></center></a>
              
            <!--------footer--------------->
            <div class="container-fluid  text-white text-center" style="height: 350px;margin-top: 50px;background-color:#1550a3;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
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
          
</body>
</html>
