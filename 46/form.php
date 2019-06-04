<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'ghg');
mysqli_query($connect, "UPDATE game1 SET name = '" . $_POST['text'] . "', cost = '". $_POST['cost'] ."' WHERE id='". $_POST['id'] ."'");
header('Location: http://dsa/index.php'); ?>