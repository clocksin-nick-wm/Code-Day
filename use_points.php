<?php

include_once("connect.php");

session_start();

$user_id = $_GET['user'];
$client_id = $_SESSION['client_id'];
$reward_id = $_GET['id'];

$query = "SELECT * FROM useraffiliation WHERE client_id= {$_SESSION['client_id']} AND user_id= {$user_id}";
$user_query = mysqli_query($mysqli, $query);
$user_num_rows = mysqli_num_rows($user_query);
if($user_num_rows > 0){
    $user_rows = mysqli_fetch_array($user_query);
    $points = $user_rows['points'];

    $reward_query = "SELECT * FROM rewards WHERE id= {$reward_id}";
    $reward_query = mysqli_query($mysqli, $reward_query);
    $reward_rows = mysqli_fetch_array($reward_query);


    $newPoints = $points - $reward_rows["point_value"];
    echo "<br/> $newPoints";

    $updateQuery = "UPDATE useraffiliation SET points= {$newPoints} WHERE client_id= {$client_id} AND user_id= {$user_id}";
    $updateQuery = mysqli_query($mysqli, $updateQuery);
    if(! $updateQuery) {
        die(mysqli_error(mysqli));
    }
    else {
        header("location: ./barcode_reader.php");
    }
}