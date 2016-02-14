<?php
require_once('connect.php');

session_start();

$query = "SELECT * FROM useraffiliation INNER JOIN user ON user.id = useraffiliation.user_id WHERE user_id = {$_SESSION['user_id']}";
$result = mysqli_query($mysqli, $query);
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
            <th>Company</th>
            <th>Points</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
        while ($useraffiliation = mysqli_fetch_assoc($result)) {
        $consumername = $useraffiliation['business_name'];
        $consumerpoints = $useraffiliation['points'];

        echo '<tr>';
        echo "<td>$consumername</td>";
        echo "<td>$consumerpoints</td>";
        ?>

        <tr>
            <td></td>
        </tr>
    </table>
</div>
<?php
}

}
?>

</body>

</html>
