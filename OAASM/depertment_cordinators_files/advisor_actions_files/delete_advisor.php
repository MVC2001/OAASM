<?php
include("../include/connection.php");
$adv_id=$_REQUEST['adv_id'];
$query = "DELETE FROM advisor_tbl WHERE adv_id=$adv_id"; 
$result = mysqli_query($connect,$query) or die ( mysqli_error($connect));
echo"<div class='alert alert-danger'>Deletion Successfull</div>";
header("Location:Advisors_account.php"); 
exit();

?>