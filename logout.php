<?php

if(isset($_GET['mobile'])){
    if($_GET['mobile'] == 'true') {
        $mobile = true;
    }
}

session_start();
$_SESSION["user_id"] = 0;
$_SESSION["client_id"] = 0;
session_destroy();
if($mobile == true) {
    header("location: ./loginMobile.html");
    die();
}
header("location: ./login.html");
die();