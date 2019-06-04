<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<form action="create.php" method="POST">
<?php echo '<input name="id" value="' . $_POST['id'] . '" style="display: none">';
	echo '<input name="img" value="' . $_POST['img'] . '">';
	echo '<input name="text" value="' . $_POST['text'] . '">';
	echo '<input name="price" value="' . $_POST['price'] . '">';
	echo '<button>Сохранить</button>' ?>
</form>
