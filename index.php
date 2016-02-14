<?php

session_start();
if(! isset($_SESSION['user_id']))
    header("location: ./login.html");

?>
<!DOCTYPE html>
    <html>
<head>
    <title>CodeDay</title>
    <?php
    include ('header.php');
    ?>
</head>
<body>
<?php
include ('navbar.php');
?>

<canvas id="myChart" width="400" height="400"></canvas>

<button id="changeValues">Change</button>
<script>



    var twitter = 34221,
        facebook = 55219,
        googleP = 111213,
        total = twitter + facebook + googleP,
        twoTwitter = 24,
        twoFacebook = 12,
        twoGoogleP = 6,
        twoTotal = twoTwitter + twoFacebook + twoGoogleP,
        currentDataSet = 0;


    var data = [{
        value: twitter,
        color: "#00aced",
        label: "Twitter (" + Math.round((twitter / total) * 100) + "%)"
    }, {
        value: facebook,
        color: "#3b5998",
        label: "Facebook (" + Math.round((facebook / total) * 100) + "%)"
    }, {
        value: googleP,
        color: "#dd4b39",
        label: "Google Plus (" + Math.round((googleP / total) * 100) + "%)"
    }

    ];

    var options = {
        animation: true,
        animationEasing: "easeOutBounce",
        segmentStrokeWidth: 0
    };

    //Get the context of the canvas element we want to select
    var c = $('#myChart');
    var ct = c.get(0).getContext('2d');
    var ctx = document.getElementById("myChart").getContext("2d");
    /*************************************************************************/
    chart = new Chart(ct).Doughnut(data, options);


    $("#changeValues").click(function() {


        if (currentDataSet == 0) {
            chart.segments[0].value = twoTwitter;
            chart.segments[1].value = twoFacebook;
            chart.segments[2].value = twoGoogleP;

            chart.segments[0].label = "Twitter (" + Math.round((twoTwitter / twoTotal) * 100) + "%)";
            chart.segments[1].label = "Facebook (" + Math.round((twoFacebook / twoTotal) * 100) + "%)";
            chart.segments[2].label = "Google Plus (" + Math.round((twoGoogleP / twoTotal) * 100) + "%)";
            currentDataSet = 1;
        } else {
            chart.segments[0].value = twitter;
            chart.segments[1].value = facebook;
            chart.segments[2].value = googleP;

            chart.segments[0].label = "Twitter (" + Math.round((twitter / total) * 100) + "%)";
            chart.segments[1].label = "Facebook (" + Math.round((facebook / total) * 100) + "%)";
            chart.segments[2].label = "Google Plus (" + Math.round((googleP / total) * 100) + "%)";
            currentDataSet = 0;
        }

        chart.update();


    });
</script>
<h1 style="float: "><strong>About Us</strong></h1>
<script type="text/javascript"  src="jquery.js"></script>
<p>Point is a business application designed to help businesses give back to their clients. The
    way these businesses give back is through rewards. Each company can give back their own rewards
    like coupons or even in-store purchases.</p>
</body>
</html>