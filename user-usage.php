<!DOCTYPE html>
    <html>
<head>
    <title>User Usage</title>
    <?php
    include('header.php');
    include('connect.php');
    ?>
</head>
<body>
<?php
include('navbar.php')
?>
<div class="products">
    <?php
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $results = $mysqli->query("SELECT email, userPoints, Rewards_Points FROM users ORDER BY id ASC");
    if($results) {
    $user_rewards = '<ul class="products">';
    //fetch results set as object and output HTML
    while ($obj = $results->fetch_object()) {
    ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<table id="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Rewards</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><p><?php echo $obj->id; ?></p></td>
        <td><p><?php echo $obj->email; ?></p></td>
        <td><p><?php echo $obj->Rewards_Points; ?></p></td>
    </tr>
    </tbody>
    <?php
    }
    }
        ?>
</div>
    </table>
</body>
</html>