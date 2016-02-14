<?php

require_once("connect.php");

$code = $_GET['code'];
$query = "SELECT * FROM users WHERE id=$code";
$results = mysqli_query($mysqli, $query);

if(! $results) {
    die(mysqli_error($mysqli));
}
else {
    if(! mysqli_num_rows($results) > 0) {
        die("User does not exist");
    }
}

$user_query = "SELECT * FROM useraffiliation WHERE client_id= {$_SESSION['client_id']} AND user_id= {$code}";
$user_num_rows = mysqli_num_rows();
if($user_rows > 0){
    echo "Good";
    $user_rows = mysql
} else {
    echo "Create User";
}


$available_awards_query = "SELECT * FROM rewards where ";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barcode Reader</title>
    <link href="signUpMobile.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src="jquery.js" type="text/javascript"></script>
</head>
<body style="background-color: white;">
<center>
    <h3 id="fs-subtitle" style="font-family: 'Pacifico', cursive; color: #36abcf;" >Points</h3>
    <h3 style="font-family:sans-serif">
    <form method="post" id="transaction_form">
        <input type="text" id="ammountSpent" placeholder="Ammount Spent">
        <input type="submit" value="Confirm" class="btn" id="scanNew" style="width: 174px; text-align: center; height:45px;">
    </form>
    <div id="available_rewards">
        filler data
    </div>
</center>
</form>
</body>
<script>
$(document).ready(function() {
    $("#transaction_form").hide();
    $("#available_rewards").hide();
});
</script>
</html>
