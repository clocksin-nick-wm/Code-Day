<?php

require_once('connect.php');

$username = mysqli_real_escape_string($_POST['username']);
$password = mysqli_real_escape_string($_POST['password']);

$errorMessage = "";
if(empty($_POST['username']))
{
    $errorMessage = "Please enter your username.";
}
if(empty($_POST['password']))
{
    $errorMessage = "Please Enter your password.";
}

$query = "SELECT * FROM client WHERE email='$username' && password='$pasword'";
$query = mysqli_query($query);
$users = mysql_num_rows($query);

if($users > 0) {
    $row = mysqli_fetch_array($query);
    session_start();
    $_SESSION["user_id"] = $row['id'];
}
else {
    die("incorrect username or password");
}

