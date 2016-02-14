<?php

require_once("connect.php");

session_start();
$_SESSION['client_id'] = 1;
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
$user_query = mysqli_query($mysqli, $user_query);
$user_num_rows = mysqli_num_rows($user_query);
if($user_num_rows > 0){
    echo "Good";
    $user_rows = mysqli_fetch_array($user_query);
    $points = $user_rows['points'];
    echo $points;
} else {
    echo "Create User";
}


$available_awards_query = "SELECT * FROM rewards where client_id= {$_SESSION['client_id']} AND point_value <= {$points}";
$result = mysqli_query($mysqli, $available_awards_query);
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
    <style>
        td, th {
            padding: 7px;
        }
    </style>
</head>
<body style="background-color: white;">
<center>
    <h3 id="fs-subtitle" style="font-family: 'Pacifico', cursive; color: #36abcf;" >Points</h3>
    <h3 style="font-family:sans-serif">
<<<<<<< HEAD
    <form method="post" id="transaction_form"><br/><br/><br/>
        <input type="text" name="amount" placeholder="Amount" id="amount" required/>
        <br>
=======
    <form method="post" id="transaction_form">
        <input type="text" id="ammountSpent" placeholder="Ammount Spent">
>>>>>>> c4546c0d30ff0731dde235130db7c1880fe96f2a
        <input type="submit" value="Confirm" class="btn" id="scanNew" style="width: 174px; text-align: center; height:45px;">
    </form>
    <div id="available_rewards">
        <table class="span5 center-table">
            <tr>
                <th>Rewards</th>
                <th>Point Value</th>
            </tr>

            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($rewards = mysqli_fetch_assoc($result)) {
                    $rewardname = $rewards['reward_name'];
                    $valuepoints = $rewards['point_value'];
                    $rewarddescription = $rewards['description'];

                    echo '<tr>';
                    echo "<td style='text-align: center'>$rewardname</td>";
                    echo "<td style='text-align: right'>$valuepoints</td>";
                    echo '</tr>';


                }
            } else {
                echo '<tr>';
                echo "<td>0 results</td>";
                echo '</tr>';
            }
            ?>
        </table>
    </div>
</center>
</form>
</body>
<script>
$(document).ready(function() {
    //$("#transaction_form").hide();
    $("#available_rewards").hide();
});
</script>
</html>
