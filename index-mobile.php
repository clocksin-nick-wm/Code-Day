<?php
require_once('connect.php');

session_start();

$query = "SELECT * FROM useraffiliation INNER JOIN client ON client.id = useraffiliation.client_id WHERE user_id = {$_SESSION['user_id']}";
$result = mysqli_query($mysqli, $query);
?>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href="stylesheet-mobile.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js" type="text/javascript"></script>
    <script src="scripts-mobile.js" type="text/javascript"></script>
</head>
<body>
<div id="header">
    <div id="logo">
        <h1 id="title" >Points</h1>
    </div>
</div>
<div id="center-container">
    <div id="QR">
        <img src="http://www.qrstuff.com/images/sample.png" id="QR-pic">
    </div>
</div>
<div id="dropdown-container">
    <div id="background-dark">
        <img id="button1" src="sideways-triangle.png">
        <img id="button2" src="triangle.png">
    </div>
    <div id="background-light">
        <table id="list-table">
        <?php
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
        </table>
    </div>
</div>

</body>
</html>
