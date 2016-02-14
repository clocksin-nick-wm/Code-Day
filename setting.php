<?php
session_start();

error_reporting(0);

require_once("connect.php");

$client_id = $_SESSION['client_id'];
$email = $_POST['email'];
$password = $_POST['Password'];
$points = $_POST['points'];

if(@$_POST['changeSubmit']) {
    $query = "UPDATE client SET email = {$email} SET password = {$password} SET points_increment = {$points} WHERE client_id = {$client_id}";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings</title>
    <link href="settings.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <style>
        div{
            overflow: hidden;
        }
    </style>
</head>
<body>
<div id="navbar" style="">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="login.html" style="font-family: 'Pacifico'; color: #3CD0E9">Points</a>
            </div>
            <div id="nav">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="user-usage.php">User Usage</a></li<li><a href="user-rewards.php">User Rewards</a></li>
                    <li><a href="rewards-input.php">Rewards Input</a> </li>
                    <li><a href="current-rewards.php">Current Rewards</a> </li>
                    <li><a href="setting.php">Settings</a></li>
                    <li><a href="logout.php" id="logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="header" style="height: 150px; width: auto; ">
    <h1 style="text-align: center; ">Need To Change Something?</h1>
</div>
<div id="form" style="height: 600px; width: 400px; position: absolute; margin-top: 2%; margin-left: 40%;">
    <form id="msform" method="post">
        <fieldset id="msfieldset" style="height: 600px; width: 400px; margin-left: .01%;">
            <h3 id="fs-subtitle" style="font-family: 'Pacifico', cursive; color: #36abcf;" >New Information</h3>
            <br>
            <input type="text" name="email" placeholder="Email"/>
            <br><br>
            <input type="password" name="Password" placeholder="New Password" />
            <br><br>
            <input type="number" name="points" placeholder="Point Increment" />
            <br><br>
            <button type="submit" name="changeSubmit" value="1" style="width: 174px; text-align: center; height:45px;">Submit</button>
        </fieldset>
    </form>
</div>
</body>
</html>