<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
$query = mysqli_query($con, "INSERT INTO store (img, text, price) VALUES ('" . $_FILES['img']['name'] . "', '" . $_POST['text'] . "', '" . $_POST['price'] . "')");
header('Location: http://tupoaihal/46/admin.php');
 ?>