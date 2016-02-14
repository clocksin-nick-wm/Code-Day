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
        <a href="zxing://scan/?ret=<?php echo urlencode("http://10.204.1.9/CodeDay/returnBarcode.php?code={CODE}"); ?>&SCAN_FORMATS=UPC_A,EAN_13,QR_CODE" class="scan">
            <input type="submit" name="formSubmit" value="Submit" class="btn" style="width: 174px; text-align: center; height:45px;"/>
        </a>
    </center>
</form>
</body>
</html>