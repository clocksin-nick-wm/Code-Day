<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barcode Reader</title>
    <link href="signUpMobile.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src="jquery.js" type="text/javascript"></script>
    <script src="java.js" type="text/javascript"></script>
</head>
<body style="background-color: white;">
    <center>
        <h3 id="fs-subtitle" style="font-family: 'Pacifico', cursive; color: #36abcf;" >Points</h3>
        <input type="text" id="ammountSpent" placeholder="Ammount Spent";
        <button class="btn" id="scanNew" style="width: 174px; text-align: center; height:45px;">Scan New</button>
    </center>
</form>
</body>
<script type="text/javascript">

$(document).ready(function() {
    $("#scanNew").click(function() {
        var ammountSpent = $("#ammountSpent").val();
        window.location = "./forward_barcode.php?ammountSpent=" + ammountSpent;
    });
});

</script>
</html>