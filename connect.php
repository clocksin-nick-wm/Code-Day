<?php

$db_username = 'root';
$db_password = '';
$db_name = 'CodeDay';
$db_host = 'localhost';

);
//connect to MySql
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>