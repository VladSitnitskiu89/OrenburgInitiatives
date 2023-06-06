<?php
    session_start();
    include('config.php');
    if (isset($_POST['submit'])) {
        $header = $_POST['header'];
		$description = $_POST['description'];
		$user_id = $_SESSION["user_id"];
		$image = $_FILES['image']['name']; 
		$expImage = explode('.',$image);
		$state = 'toModerate';
		$imageExpType = $expImage[1];
		date_default_timezone_set('Australia/Melbourne');
		$date = date('m/d/Yh:i:sa', time());
		$rand = rand(10000,99999);
		$encName = $date.$rand;
		$imageName = md5($encName).'.'.$imageExpType;
		$imagePath = "uploads/initiativesImg/".$imageName;
		move_uploaded_file($_FILES["image"]["tmp_name"],$imagePath);
		$query = $connection->prepare("INSERT INTO initiatives(header, description, image, user_id, state) VALUES (:header, :description, :image, :user_id, :state)");
		$query->bindParam("header", $header, PDO::PARAM_STR);
		$query->bindParam("description", $description, PDO::PARAM_STR);
		$query->bindParam("image", $imageName, PDO::PARAM_STR);
		$query->bindParam("user_id", $user_id, PDO::PARAM_STR);
		$query->bindParam("state", $state, PDO::PARAM_STR);
		$result = $query->execute();
		if ($result) {
			echo '<!DOCTYPE html>
					<html lang="ru">
						<head>
							<meta charset="UTF-8" />
							<meta http-equiv="X-UA-Compatible" content="IE=edge" />
							<meta name="viewport" content="width=device-width, initial-scale=1.0" />
							<link rel="stylesheet" href="./header.css" />
							<link rel="stylesheet" href="./footer.css" />
							<link rel="stylesheet" href="./newInitiativeGood.css" />
							<link rel="preconnect" href="https://fonts.googleapis.com">
							<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
							<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
							<script src="./script.js"></script>
							<title>Инициативы Оренбурга</title>
						</head>
					  
						<body>';
			include 'header.php';
			echo '<main><h1>Спасибо!</h1>
			<img src="./img/newInitiativeGood.png" />
			</main>';
			include 'footer.php';
			echo '</body>
			</html>';
		} else {
			echo 'Что-то пошло не так';
		}
    }
?>