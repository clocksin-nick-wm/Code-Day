<?php

session_start();
if(! isset($_SESSION['user_id']))
    header("location: ./login.html");

?>
<!DOCTYPE html>
    <html>
<head>
    <?php
    include('header.php');
    ?>
    <link rel="stylesheet" href="Rewards.css" type="text/css">
</head>
<body>
<?php
include('navbar.php');
?>
<?php


require_once("connect.php");

?>
<?php
if(@$_POST['formSubmit']) {
    if (empty($_POST['reward_name'])) {
        $errorMessage = "<li>You forgot to enter a phone number.</li>";
    };
    if (empty($_POST['description'])) {
        $errorMessage = "<li>You forgot to enter your email.</li>";
    }
    if (empty($_POST['point_value'])) {
        $errorMessage = "<li>You forgot to enter your Password.</li>";
    }

    $name = str_replace("'", "", $_POST['reward_name']);
    $point = $_POST['point_value'];
    $description = str_replace("'", "", $_POST['description']);
    $client = $_SESSION['user_id'];

    $query = "INSERT INTO rewards (reward_name, point_value, description, client_id) VALUES ('$name', '$point', '$description', '$client')";

    $query = mysqli_query($mysqli, $query);

    if ($query) {
        echo "<p style='text-align: center'>Rewards Entered Successfully</p>";
        echo "<p style='text-align: center'><a href='rewards-input.php'>Click Here to create a new Reward</a></p>";
        die();
    }
}


?>


<form action="rewards-input.php" method="post" class="form" id="msform">
    <fieldset id="msfieldset" style="font-family: sans-serif">
    Reward Name:<input type="text" maxlength="60" name="reward_name" required >
    Reward Description:<input type="text" maxlength="255" name="description" required>
    Point Value:<input type="number" name="point_value" required>
    <button type="submit" name="formSubmit" value="1">Submit</button>
    </fieldset>

</form>
<div id="footer" style="height: 200px; width: auto; background-color: rgba(0, 0, 0, 0.84); margin-top: 38%;">
</div>
</body>
</html>

