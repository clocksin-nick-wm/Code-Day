<?php
require_once('connect.php');

session_start();

$query = "SELECT * FROM rewards INNER JOIN client ON client.id = rewards.client_id WHERE rewards = {$_SESSION['user_id']}";
$result = mysqli_query($mysqli, $query);
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
        $result = mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            while ($useraffiliation = mysqli_fetch_assoc($result)) {
                $consumername = $useraffiliation['reward'];
                $consumerpoints = $useraffiliation['point_value'];

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
