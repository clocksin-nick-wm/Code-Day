<?php

session_start();

$stmt = $dbh->prepare("SELECT * FROM cart c WHERE c.user_id = :carts");
$stmt->execute(array(':carts' => $_GET['carts']));
$results = $stmt->fetchAll();


?>
<!DOCTYPE html>
<html>
<header>
    <title>User Usage</title>
    <?php
    include('header.php')
    ?>
</header>
<body>
<?php
include('navbar.php')
?>

<div id="userRewards">
    <table id="userRewardsTable">
        <tr>
            <th>User</th>
            <th>Points</th>
        </tr>
        <tr>
            <th></th>
        </tr>
    </table>
</div>

</body>

</html>
