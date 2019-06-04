<?php
header('Location: http://tupoaihal/46/admin.php');
 $con = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');

$query = mysqli_query($con, "DELETE FROM store WHERE id = '" . $_GET['id'] . "'");
echo "hello" . $_GET['id'] . "how are you";?>