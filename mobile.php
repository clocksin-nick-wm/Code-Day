<?php
require_once('connect.php');

session_start();

$query = "SELECT * FROM useraffiliation INNER JOIN client ON client.id = useraffiliation.client_id WHERE user_id = {$_SESSION['user_id']}";
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0) {
    while ($useraffiliation = mysqli_fetch_assoc($result)) {
        $companyname = $useraffiliation['business_name'];
        $companypoints = $useraffiliation['points'];

        echo '<tr>';
        echo "<td>$companyname</td>";
        echo "<td>$companypoints</td>";

    }

}
?>