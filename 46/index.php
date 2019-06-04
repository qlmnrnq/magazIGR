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
		</div>
		<div class="container">
			<div class="row">
				<?php for ($i=0; $i < $query->num_rows; $i++) { 
			$product = $query->fetch_assoc();?>
			
				<div class="col-2">
					<?php echo '<img src="' .  $product['img'] . '" class="w-100">';
					  echo '<h2>' . $product['text'] . '</h2>';
					  echo '<p>' . $product['price'] . ' рублей' . '</p>'?>
					<button>Купить</button>
				
			</div>
			<?php } ?>
		</div>
		</div>
	</body>
</html>