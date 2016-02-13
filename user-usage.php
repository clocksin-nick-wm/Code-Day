<!DOCTYPE html>
    <html>
<header>
    <title>User Usage</title>
    <?php
    include('header.php');
    include('connect.php');
    ?>
</header>
<body>
<?php
include('navbar.php')
?>
<table>
    <?php
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $results = $mysqli->query("SELECT username, userRewards FROM users ORDER BY id ASC");
    if($results) {
    $user_rewards = '<ul class="products">';
    //fetch results set as object and output HTML
    while ($obj = $results->fetch_object()) {
    ?>
    ?>
    <tbody>
    <tr></tr>
    </tbody>
</table>
</body>

</html>