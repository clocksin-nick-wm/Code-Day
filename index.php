<?php

session_start();
if(! isset($_SESSION['user_id']))
    header("location: ./login.html");

?>


<!DOCTYPE html>
<html>
<head>
    <title>CodeDay</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="Chart.js-master/Chart.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <style>
        div{
            overflow: hidden;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php" style="font-family: 'Pacifico'; color: #3CD0E9">Points</a>
        </div>
        <div id="nav">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="user-usage.php">User Usage</a></li>
                <li><a href="user-rewards.php">User Rewards</a></li>
                <li><a href="rewards-input.php">Rewards Input</a> </li>
                <li><a href="current-rewards.php">Current Rewards</a> </li>
                <li><a href="setting.php">Settings</a></li>
                <li><a href="logout.php" id="logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row" style=" height: 700px; width: 370px; margin-left: .3%">
        <div class="col-sm-8">
            <h2 style="text-align: right;">About Us</h2>
            <br>
            <h4>Established 2016</h4>
<<<<<<< HEAD
            <p style="margin-left: 10%">The web application <span style="font-style: italic;">Points</span> is brought to you by a cunning team of developers. We work around the clock to provide you with a functioning bridge to your customers. The team, made up completely of high school students, created the whole thing from scratch in under 24 hours.</p>
=======
            <p style="margin-left: 10%">Point is an up and coming company. Point is designed to help big business manage their consumers benefits.</p>
>>>>>>> b40cb410405d72231870e30b44cb4ca123cd0a4d
        </div>
    </div>
</div>

<div class="container-fluid bg-grey">
    <div class="row" style=" height: 700px; width: 350px; float: right; position: absolute; right: 0; margin-top: -37%">
        <div class="col-sm-8">
            <h2 style="text-align: right;">Our Goals</h2>

<<<<<<< HEAD
            <h4><strong>MISSION:</strong>Our mission is to provide businesses with a simple, and easily accessable way of handling customer rewards. We strive to make sure our service is safe, and impervious to internet criminals. </h4>
            <p><strong>VISION:</strong>Our vision is that <span style="font-style: italic">Points</span> will be the standard in reward services. More and more people will take advantage of the process only growing more.</p>
=======
            <h4><strong>MISSION:</strong>Point's goal is to give help businesses give back to their clients.</h4>
<<<<<<< HEAD
            <p><strong>VISION:</strong> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
>>>>>>> 99ba5b0718339a0a14163d86608e83b2f2f3b269
=======
            <p><strong>VISION:</strong> We hope one day to be the biggest beneficiary rewards company.</p>
>>>>>>> b40cb410405d72231870e30b44cb4ca123cd0a4d
        </div>
    </div>
</div>
<div class="container" style=" margin-top: -36%; margin-left: 18%">
    <h3 class="text-center">Contact</h3>
    <br>
    <div class="row test" >
        <div class="col-md-4">
            <p>Have any server issues? Contact us</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Tempe, US</p>
            <p><span class="glyphicon glyphicon-phone"></span>Phone: 623-555-9321</p>
            <p><span class="glyphicon glyphicon-envelope"></span>Email: points@gmail.com</p>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
            <div class="row">
                <div class="col-md-12 form-group">
                    <button class="btn pull-right" type="submit" style="margin-top: 20px;">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" style="height: 200px; width: auto; background-color: rgba(0, 0, 0, 0.84); margin-top: 19%;">
</div>
</body>
</html>