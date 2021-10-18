<?php
$products = [
    ["name" => 'Koszulka', "price" => 80],
    ["name" => 'Spodnie', "price" => 65],
    ["name" => 'Buty', "price" => 220]
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Producty</title>
	<link rel="stylesheet" href="../styles.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<div class="content">
		<div class="wrapper">
			<h3>Nasze wspaniałe produkty:</h3>
			<ul>
				<?php
				$suma = 0;
				foreach($products as $product){
					$suma = $suma + $product["price"];
					echo "<li>" . $product["name"]. " -". " cena: " .$product["price"] . "zł</li>";
				}
				?>
			</ul>
			<p>Suma: <?php echo $suma;?> zł</p>
		</div>
	</div>
	<?php include '../includes/sidebar.php'; ?>
</div>
<?php include '../includes/footer.php'; ?>
</body>
</html>
