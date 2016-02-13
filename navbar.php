<?php
session_start();
if($_SESSION)
?>
<link rel="stylesheet" type="text/css" href="main.css">
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">CodeDay</a>
        </div>
        <div id="nav">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="user-usage.php">User Usage</a></li>
            <li><a href="#">User Rewards</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
        </div>
    </div>
</nav>