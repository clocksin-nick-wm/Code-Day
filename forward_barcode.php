<?php
$ammountSpent = $_GET['ammountSpent'];

?>

<script>
    window.location = "http://zxing://scan/?ret=<?php echo urlencode("http://10.204.1.9/CodeDay/returnBarcode.php?code={CODE}&ammountSpent=$ammountSpent"); ?>&SCAN_FORMATS=UPC_A,EAN_13,QR_CODE"""
</script>
