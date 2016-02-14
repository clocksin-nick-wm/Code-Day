<?php
require_once ('connect.php');

$reward_to_del = $_POST['reward_to_delete'];
echo "DELETE * FROM rewards WHERE reward_name=$reward_to_del";
$delete_query = "DELETE * FROM rewards WHERE reward_name=$reward_to_del";
$delete_query = mysqli_query($mysqli, $delete_query);
if(! $delete_query)
    die(mysqli_error($mysqli));
else
    echo "<script>alert('well its running so there\'s that')</script>";
?>