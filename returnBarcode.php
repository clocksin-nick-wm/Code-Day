<?php

require_once("connect.php");

error_reporting(0);
session_start();

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

    $user_rows = mysqli_fetch_array($user_query);
    $points = $user_rows['points'];

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
        <button style="width:200px" class="btn" id="newtrans">New Transaction</button><br/>
        <button style="width:200px" class="btn" id="use_pnts">Use Points</button>
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

                    echo '<tr id="' . $rewards['id'] . '">';
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
    $("#available_rewards").hide();

    $("#newtrans").click(function() {
        var moneySpent = prompt("How much money was spent?");
        moneySpent = parseInt(moneySpent);
        moneySpent = Math.floor(moneySpent);
        window.location = "./add_points.php?spent=" + moneySpent + "&user=" + <?php echo $code ?>;
    });
    $("#use_pnts").click(function() {
        $("#use_pnts").hide();
        $("#newtrans").hide();
        $("#available_rewards").toggle();
    });

    $("tr").click(function() {
        window.location = "./use_points.php?id=" + this.id + "&user=" + <?php echo $code?>;
    })
});
</script>
</html>