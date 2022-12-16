<?php
session_start();
error_reporting(0);
include('config.php');

if(isset($_POST['submitButton'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = mysqli_query($conn, "SELECT id FROM tblusers WHERE email = '$email' && password = '$password'");
    $result = mysqli_fetch_array($sql);
    if($result > 0) {
        $_SESSION['detsuid'] = $result['id'];
        header("location:login_success.php");
    } else {
        $msg = "Invalid Details";
    }
} 
?> 