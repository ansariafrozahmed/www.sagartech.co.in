<?php
include("include/config.php");

if(isset($_POST['id']))
{
    
    //error_reporting(0);
    $username = $_POST['id'];
    $password = $_POST['pass'];
    
$check = mysqli_query($con,"SELECT * FROM admin WHERE ad_username = '$username' AND ad_password = '$password'");
//$res = mysqli_($check);
$num = mysqli_num_rows($check);
 if($num > 0) {
      session_start();
      $_SESSION['login'] = "admin";
     echo "loggedin";
    // echo "error".mysqli_error($con);
 }
 else {
     echo "error".mysqli_error($con);
 }
}
else if(isset($_POST['cl_id']))
{
    
    //error_reporting(0);
    $username = $_POST['cl_id'];
    $password = $_POST['pass'];
    
$check = mysqli_query($con,"SELECT * FROM guest WHERE cl_username = '$username' AND cl_password = '$password'");
//$res = mysqli_($check);
$num = mysqli_num_rows($check);
 if($num > 0) {
      session_start();
      $_SESSION['client'] = "client";
     echo "loggedin";
    // echo "error".mysqli_error($con);
 }
 else {
     echo "error".mysqli_error($con);
 }
}
?>