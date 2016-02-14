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

    $query = "SELECT * FROM useraffiliation INNER JOIN users ON users.id = useraffiliation.user_id WHERE user_id = {$_SESSION['user_id']}";
    $result = mysqli_query($mysqli, $query);
    ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <table id="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>User Email</th>
            <th>Spent/Earned</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
            while ($useraffiliation = mysqli_fetch_assoc($result)) {
            $consumerid = $useraffiliation['id'];
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
    </table>
</body>
</html>