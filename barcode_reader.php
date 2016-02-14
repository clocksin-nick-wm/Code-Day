<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barcode Reader</title>
    <link href="signUpMobile.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src="jquery.js" type="text/javascript"></script>
    <style>
        a {
            color:#36abcf;
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color: white;">
    <center>
        <h3 id="fs-subtitle" style="font-family: 'Pacifico', cursive; color: #36abcf;" >Points</h3><br/><br/>
        <a href="zxing://scan/?ret=<?php echo urlencode("http://172.17.2.89:8080/CodeDay/returnBarcode.php?code={CODE}"); ?>&SCAN_FORMATS=UPC_A,EAN_13,QR_CODE">
        <button class="btn" id="scanNew" style="width: 174px; text-align: center; height:45px;">Scan</button>
            </a>
        <br/><br/>
        <h3 style=" font-family:sans-serif;
    font-size:12px; color: #36abcf;margin-left:-30%"><a href="./logout.php?mobile=true">Log out</a></h3></center>
    </center>
</form>
</body>
<script type="text/javascript">
</script>
</html>