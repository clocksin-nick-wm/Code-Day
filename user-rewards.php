<?php
require_once('connect.php');

session_start();

$query = "SELECT * FROM useraffiliation INNER JOIN users ON users.id = useraffiliation.user_id WHERE client_id = {$_SESSION['user_id']}";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Usage</title>
    <?php
    include('header.php')
    ?>
</head>
<body>
<?php
include('navbar.php')
?>



    <table class="span5 center-table">
        <tr>
            <th>User Email</th>
            <th>Total Points</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
        while ($useraffiliation = mysqli_fetch_assoc($result)) {
        $consumername = $useraffiliation['email'];
        $consumerpoints = $useraffiliation['points'];

        echo '<tr>';
        echo "<td>$consumername</td>";
        echo "<td>$consumerpoints</td>";
        ?>
            <?php
        }
        } else {
            echo '<tr>';
            echo "<td>0 results</td>";
            echo '</tr>';
        }
        ?>

    </table>
<?php

?>
<div id="footer" style="height: 310px; width: auto; background-color: rgba(0, 0, 0, 0.84); margin-top: 20%; ">
</div>

</body>

</html>
