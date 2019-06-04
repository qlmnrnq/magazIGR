<!DOCTYPE html>
<html>
	<head>
		<title>magaz</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<meta charset="utf-8">
	</head>
	<body>
		<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
		$query = mysqli_query($connect, 'SELECT * FROM store'); ?>
			<div class="container-fluid bg-warning pb-2 pt-2">
				<form method="POST" action="admin.php">
					<button>
						ADMIN PANEL
					</button>
				</form>
				<form action="insert.php" method="POST" enctype="multipart/form-data">
					<button>
						новый товар
					</button>
					<input type="file" name="img" placeholder="Картинка">
					<input type="" name="text" placeholder="Название">
					<input type="" name="price" placeholder="Цена">
				</form>
			</div>
			<div class="container">
				
			
			<div class="row">
				<?php for ($i=0; $i < $query->num_rows; $i++) { 
			$product = $query->fetch_assoc();?>
			
				<div class="col-2">
					<?php echo '<img src="' .  $product['img'] . '" class="w-100">';
					  echo '<h2>' . $product['text'] . '</h2>';
					  echo '<p>' . $product['price'] . ' рублей' . '</p>'?>
					<form action="delete.php" method="GET">
						<?php echo '<input name="id" value="' . $product['id'] . '" style="display: none">' ?>
						<button>удалить</button>
					</form>
					<form action="update.php" method="POST">
						<?php echo '<input name="id" value="' . $product['id'] . '" style="display: none"><input name="text" value="' . $product['text'] . '" style="display: none" ><input name="price" value="' . $product['price'] . '" style="display: none"><input name="img" value="' . $product['img'] . '" style="display: none">' ?>

						<button>редактировать</button>
					</form>
				
			</div>
			<?php } ?>
		</div>
		</div>
	</body>
</html>