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


		<div class="wrapper">
			<h3>Test DB</h3>
			<?php
			$string = file_get_contents("../credentials.json");
			$json = json_decode($string, true);
			$login = $json['login'];
			$pass = $json['pass'];
			$basename = $json["basename"];
			$host = $json['host'];

			$requestedUser = $_GET['posts_id'] ?? null;
			$mysqli = new mysqli($host, $login, $pass, $basename);
			
			if(	is_numeric($requestedUser) || empty($requestedUser)){
				$result = $mysqli->query("SELECT * FROM posts WHERE id = $requestedUser");
				if($result){
					foreach ($result as $row) {
						echo " id: " . $row['id']  . ", title: " . $row['title'] . ", body: " . $row['body'] . "<br>";
					}
				}
		} else{
			$result="google.com";
			echo "<script type='text/javascript'> 
			
			alert('Proszę nie hakowac mi aplikaji )=');
			</script>";
		}
			?>
		</div>
	</div>	
    <?php include '../includes/sidebar.php'; ?>
</div>
<?php include '../includes/footer.php'; ?>


</body>
</html>
