//Group1
<?php
session_start();
include('./include/connection.php');

//Advisors3
$text_id=$_REQUEST["text_id"];
$query = "DELETE FROM  advisors_texts_tbl  WHERE text_id=$text_id"; 
$result = mysqli_query($connect,$query) or die ( mysqli_error($connect));
echo"<div class='alert alert-danger'>sms deleted successfull</div>";
header("Location: text_area.php"); 
exit();


?>
