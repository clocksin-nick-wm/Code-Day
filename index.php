<?php

session_start();
if(! isset($_SESSION['user_id']))
    header("location: ./login.html");

?>
<!DOCTYPE html>
    <html>
<head>
    <title>CodeDay</title>
    <?php
    include ('header.php');
    ?>
</head>
<body>
<?php
include ('navbar.php');
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>About Us</h2>
            <h4>Established 2016</h4>
            <p>We are a new up and coming business that hopes to help other business give back to their clients.</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-phone logo"></span>
        </div>
    </div>
</div>

<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo"></span>
        </div>
        <div class="col-sm-8">
            <h2>Our Goals</h2>
            <h4><strong>MISSION:</strong>Help business give back to their users with rewards points</h4>
            <p><strong>VISION:</strong> Our vision is to help user fianfoiaioag</p>
        </div>
    </div>
</div>
<div class="container">
    <h3 class="text-center">Contact</h3>
    <div class="row test">
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
                    <button class="btn pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>