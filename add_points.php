<?php

include_once("connect.php");

session_start();

$user_id = $_GET['user'];
$client_id = $_SESSION['client_id'];
$moneySpent = $_GET['spent'];

$query = "SELECT * FROM useraffiliation WHERE client_id= {$_SESSION['client_id']} AND user_id= {$user_id}";
$user_query = mysqli_query($mysqli, $query);
$user_num_rows = mysqli_num_rows($user_query);
if($user_num_rows > 0){
    echo "Good";
    $user_rows = mysqli_fetch_array($user_query);
    $points = $user_rows['points'];
    echo $points;

    $reward_query = "SELECT * FROM client WHERE id= {$client_id}";
    $reward_query = mysqli_query($mysqli, $reward_query);
    $reward_rows = mysqli_fetch_array($reward_query);


    $pointInc = $reward_rows["point_increment"];
    $new_points = $moneySpent * $pointInc;
    $new_points += $points;

    echo "<br/> $new_points";

    $updateQuery = "UPDATE useraffiliation SET points= {$new_points} WHERE client_id= {$client_id} AND user_id= {$user_id}";
    $updateQuery = mysqli_query($mysqli, $updateQuery);
    if(! $updateQuery) {
        die(mysqli_error(mysqli));
    }
    header("location: ./barcode_reader.php");
}