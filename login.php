<?php
error_reporting(0);

require_once('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['mobile'])) {
    if($_POST["mobile"] == 'true') {
        $mobile = true;
    }
} else {
    $mobile = false;
}

$errorMessage = "";
if(empty($_POST['username']))
{
    $errorMessage = "Please enter your username.";
}
if(empty($_POST['password']))
{
    $errorMessage = "Please Enter your password.";
}
if($mobile == true) {
    $query = "SELECT * FROM users WHERE email='$username' && password='$password'";
}else {
    $query = "SELECT * FROM client WHERE email='$username' && password='$password'";
}

$query = mysqli_query($mysqli, $query);
$users = mysqli_num_rows($query);

if($users > 0) {
    $row = mysqli_fetch_array($query);
    session_start();

    if($mobile == true) {
        $_SESSION["mobile_user_id"] = $row['id'];
        header("location: ./index-mobile.php");
    }else {

        $_SESSION["user_id"] = $row['id'];
        header("location: ./index.php");
    }
    die();
}else if($mobile == true) {
    $query = "SELECT * FROM client WHERE email='$username' && password='$password'";
    $query = mysqli_query($mysqli, $query);
    $users = mysqli_num_rows($query);
    if($users > 0) {
        echo "<script> alert('work');</script>";
        $row = mysqli_fetch_array($query);
        session_start();
        $_SESSION['client_id'] = $row['id'];
        header("location: ./barcode_reader.php");
    }
}
else {
    die("incorrect username or password");
}

