<?php
require_once('connect.php');

session_start();

$query = "SELECT * FROM rewards INNER JOIN client ON client.id = rewards.client_id WHERE client_id = {$_SESSION['user_id']}";
//$delete = "DELETE * FROM rewards WHERE reward_id = {$_GET['id']}";

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
            <th>Description</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($rewards = mysqli_fetch_assoc($result)) {
                $rewardname = $rewards['reward_name'];
                $valuepoints = $rewards['point_value'];
                $rewarddescription = $rewards['description'];


                echo '<tr>';
                echo "<td>$rewardname</td>";
                echo "<td>$valuepoints</td>";
                echo "<td>$rewarddescription</td>";
                echo "<td><form method='post' action='#'><input type='hidden' name='reward_to_delete' value='$rewardname' /><button class='alert alert-danger' type='submit' name='removeButton'>Remove</button></form></td>";
                echo '</tr>';


            }
        } else {
            echo "0 results";
        }
        ?>


</body>
</html>
