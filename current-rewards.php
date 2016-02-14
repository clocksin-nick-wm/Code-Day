<?php
require_once('connect.php');

session_start();

$query = "SELECT * FROM rewards INNER JOIN client ON client.id = rewards.client_id WHERE client_id = {$_SESSION['user_id']}";
$result = mysqli_query($mysqli, $query);

if(! $result) {
    die(mysqli_error($mysqli));
}
?>
<!DOCTYPE html>
    <html>
<head>
    <?php
    include('header.php');
    ?>
</head>
<body>
<?php
include('navbar.php');
?>

<table class="span5 center-table">
        <tr>
            <th>Rewards</th>
            <th>Point Value</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($rewards = mysqli_fetch_assoc($result)) {
                $consumername = $rewards['reward_name'];
                $consumerpoints = $rewards['point_value'];

                echo '<tr>';
                echo "<td>$consumername</td>";
                echo "<td>$consumerpoints</td>";
                ?>
                <?php
            }
        } else {
            echo "0 results";
        }
        ?>


</body>
</html>
