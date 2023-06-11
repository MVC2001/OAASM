<?php

$servename ="localhost";
$username ="root";
$password="";
$db_name="oasm_db";

$connect = mysqli_connect($servename,$username,$password,$db_name);

if(!$connect){

    die("connection failure please try again");
}
?>