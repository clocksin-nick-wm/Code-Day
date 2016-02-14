<?php

session_start();
if(! isset($_SESSION['user_id']))
    header("location: ./login.html");

?>
<!DOCTYPE html>
    <html>
<head>
    <title>User Usage</title>
    <?php
    include('header.php');
    include('connect.php');
    ?>
</head>
<body>
<?php
include('navbar.php')
?>
<div class="products">
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "points";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $query = "SELECT * FROM useraffiliation INNER JOIN users ON users.id = useraffiliation.user_id WHERE client_id = {$_SESSION['user_id']}";
    $result = mysqli_query($mysqli, $query);
    ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <table id="table" class="span5 center-table">
        <div class="table_bordered">
        <thead>
        <tr>
            <th>Time Created</th>
            <th>User Email</th>
            <th>Spent/Earned</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
            while ($useraffiliation = mysqli_fetch_assoc($result)) {
            $consumerid = $useraffiliation['time_creation'];
            $consumeremail = $useraffiliation['email'];
            $consumerpoints = $useraffiliation['points'];

            echo '<tr>';
            echo "<td>$consumerid</td>";
            echo "<td>$consumeremail</td>";
            echo "<td>$consumerpoints</td>";
            ?>

        </tr>
        </tbody>
        <?php
        }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>
        </div>
</div>
    </table>
<div id="footer" style="height: 200px; width: auto; background-color: rgba(0, 0, 0, 0.84); margin-top: 20%;">
</div>
</body>
</html>

