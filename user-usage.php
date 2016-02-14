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
    <?php
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $results = $mysqli->query("SELECT usernameFROM users ORDER BY id ASC");
    if($results) {
        $user_rewards = '<ul class="products">';
        //fetch results set as object and output HTML
        while ($obj = $results->fetch_object()) {
        }
    }
    ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <table class="bordered">
        <thead>
        <tr>
            <th data-field="id">Name</th>
            <th data-field="name">Item Name</th>
            <th data-field="price">Item Price</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
        </tr>
        <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
        </tr>
        <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
        </tr>
        </tbody>
    </table>
</body>
</html>