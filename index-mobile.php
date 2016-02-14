<?php
require_once('connect.php');

session_start();
if(! isset($_SESSION['mobile_user_id']))
    header("location: ./loginMobile.html");

$query = "SELECT * FROM useraffiliation INNER JOIN client ON client.id = useraffiliation.client_id WHERE user_id = {$_SESSION['mobile_user_id']}";
$result = mysqli_query($mysqli, $query);

$image_link = "http://www.qr-code-generator.com/phpqrcode/getCode.php?cht=qr&chl=" . $_SESSION['mobile_user_id'] . "&chs=180x180&choe=UTF-8&chld=L|-0"



?>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href="stylesheet-mobile.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
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
        <img src=<?php echo "'$image_link'" ?> id="QR-pic">
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
                echo "<th>Company</th>";
                echo "<th>Points</th>";
            echo '</tr>';
            echo '<tr>';
                echo "<td>$companyname</td>";
                echo "<td>$companypoints</td>";
            echo '</tr>';
                }

                }
            ?>
        </table>
    </div>
</div>

</body>
</html>
