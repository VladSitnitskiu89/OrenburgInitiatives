<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./header.css" />
		<link rel="stylesheet" href="./footer.css" />
		<link rel="stylesheet" href="./index.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
		<script src="./script.js"></script>
		<title>Инициативы Оренбурга</title>
    </head>
  
    <body onload="ClearHash(); LoadInitiatives('toModerate');">
	<?php include 'header.php';?>
		
		<main>
			<div id="mainMenuComplete">
				<h1>На модерации</h1>
				<a id="toAddInitiative" href="./addInitiative.php">ПРЕДЛОЖИТЬ ИНИЦИАТИВУ</a>
			</div>
			<article id="article">
				
			</article>
			<button id="showMore" onclick="LoadInitiatives('toModerate');">Показать еще</button>
		</main>
		
	<?php include 'footer.php';?>

    </body>
</html>