<?php
require_once('connect.php');

session_start();



if(isset($_POST['removeButton'])){
    $delete = "DELETE FROM rewards WHERE id = {$_POST['id']}";
    $result1 = mysqli_query($mysqli, $delete);
}
$query = "SELECT * FROM rewards WHERE client_id= {$_SESSION['user_id']}";
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
                echo "<td><form method='post' action='./current-rewards.php'><input type='hidden' name='id' value='".$rewards['id']."'><input type='hidden' name='reward_to_delete' value='$rewardname' />
                <button class='alert alert-danger' type='submit' name='removeButton'>Remove</button></form></td>";
                echo '</tr>';


            }
        } else {
            echo '<tr>';
            echo "<td>0 results</td>";
            echo '</tr>';
        }
        ?>
        </table>
    <div id="footer" style="height: 100px; width: auto; background-color: rgba(0, 0, 0, 0.84); margin-top: 30%; ">
    </div>

</body>
</html>
