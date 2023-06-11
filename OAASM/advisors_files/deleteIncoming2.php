
<?php
session_start();
include('./include/connection.php');

$text_id=$_REQUEST["text_id"];
$query = "DELETE FROM stud_texts_tbl WHERE group2_id=$group2_id"; 
$result = mysqli_query($connect,$query) or die ( mysqli_error($connect));
echo"<div class='alert alert-danger'>sms deleted successfull</div>";
header("Location: text_area.php"); 
exit();

?>
