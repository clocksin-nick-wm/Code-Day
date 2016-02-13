<?php

require_once('connect.php');

$username = $_POST

$errorMessage = "";
if(empty($_POST['username']))
{
    $errorMessage = "<li>Please enter your username.</li>";
}
if(empty($_POST['password']))
{
    $errorMessage = "<li>Please Enter your password.</li>";
}
?>