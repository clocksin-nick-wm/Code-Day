<?php

require_once("connect.php");

$code = $_GET['code'];
$query = "SELECT * FROM users WHERE id=$code";
$results = mysqli_query($mysqli, $query);

if(! $results) {
    die(mysqli_error($mysqli));
}
else {
    if(! mysqli_num_rows($results > 0)) {
        die("User does not exist");
    }
}



?>