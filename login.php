<?php
error_reporting(0);

require_once('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$errorMessage = "";
if(empty($_POST['username']))
{
    $errorMessage = "Please enter your username.";
}
if(empty($_POST['password']))
{
    $errorMessage = "Please Enter your password.";
}

$query = "SELECT * FROM client WHERE email='$username' && password='$password'";
$query = mysqli_query($mysqli, $query);
$users = mysqli_num_rows($query);

if($users > 0) {
    $row = mysqli_fetch_array($query);
    session_start();
    $_SESSION["user_id"] = $row['id'];
    header("location: ./index.php");
    die();
}
else {
    die("incorrect username or password");
}
