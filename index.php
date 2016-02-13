<!DOCTYPE html>
    <html>
<head>
    <title>CodeDay</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include ('navbar.php');
?>

<canvas id="myChart" width="400" height="400">
    var myLineChart = new Chart(ctx).Line(data, options);

</canvas>

<script src="Chart.js-master/Chart.js">
    var ctx = document.getElementById("myChart").getContext("2d");
    var myNewChart = new Chart(ctx).PolarArea(data);
    new Chart(ctx).PolarArea(data, options);

</script>
<script type="text/javascript"  src="jquery.js"></script>
</body>
</html>