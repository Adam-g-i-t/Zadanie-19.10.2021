<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Post</title>
	<link rel="stylesheet" href="../styles.css">
</head>
<body>
<?php include '../includes/header.php'; ?>
<?php include '../includes/navbar.php'; ?>
<div class="content">
<p>nwm czm ale tu footer i sidebar  nie działa...</p>
		<div class="wrapper">
			<h3>Test DB</h3>
			<?php
			$requestedUser = $_GET['user_id'];
			$mysqli = new mysqli("localhost", "root", "", "blockphp");
			$result = $mysqli->query("SELECT * FROM posts WHERE author = $requestedUser");
			foreach ($result as $row) {
				echo " id: " . $row['id'] . ", title: " . $row['title'] . ", body: " . $row['body'] . "<br>";
			}
			?>
		</div>
	</div>	
    <?php include '../includes/sidebar.php'; ?>
</div>
<?php include 'includes/footer.php'; ?>


</body>
</html>
