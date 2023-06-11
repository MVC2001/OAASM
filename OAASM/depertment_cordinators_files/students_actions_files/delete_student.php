<?php
include("../include/connection.php");
$stud_id =$_REQUEST['stud_id'];
$query = "DELETE FROM student_tbl WHERE stud_id=$stud_id"; 
$result = mysqli_query($connect,$query) or die ( mysqli_error($connect));
echo"<div class='alert alert-danger'>Deletion Successfull</div>";
header("Location:Student_account.php"); 
exit();

?>