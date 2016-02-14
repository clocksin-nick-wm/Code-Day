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
    $sql = "SELECT id, email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {


    ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<table id="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Rewards</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
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