<?php
require_once('connect.php');

session_start();

$query = "SELECT * FROM useraffiliation INNER JOIN users ON users.id = useraffiliation.user_id WHERE user_id = {$_SESSION['user_id']}";
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
<<<<<<< HEAD

=======
<style>
    td, th {
        padding: 6%;
    }
    td {
        text-align: center;
    }
</style>
>>>>>>> f083ab69fc89afba94f12d1654c8f68300a02195
<div id="userRewards">
    <table id="userRewardsTable">
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
