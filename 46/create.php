<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
mysqli_query($connect, "UPDATE store SET img = '" . $_POST['img'] . "', text = '" . $_POST['text'] . "', price = '". $_POST['price'] ."' WHERE id='". $_POST['id'] ."'"); 
header('Location: http://tupoaihal/46/admin.php');
?>