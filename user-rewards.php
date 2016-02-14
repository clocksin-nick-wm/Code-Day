<?php

session_start();

$stmt = $dbh->prepare("SELECT * FROM useraffiliation INNER JOIN client ON client.id = useraffiliation.client_id WHERE user_id = :user_id");
$stmt->execute(array(':user_id' => $_SESSION['user_id']));
$results = $stmt->fetchAll();
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
        if (count($results) > 0) {
        foreach ($results as $useraffiliation) {
        $companyname = $useraffiliation['client.business_name'];
        $companypoints = $useraffiliation['points'];

        echo '<tr>';
        echo "<td>$companyname</td>";
        echo "<td>$companypoints</td>";
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
