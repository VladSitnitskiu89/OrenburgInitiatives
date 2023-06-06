<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./header.css" />
		<link rel="stylesheet" href="./footer.css" />
		<link rel="stylesheet" href="./addInitiative.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<script src="./script.js"></script>
		<title>Инициативы Оренбурга</title>
    </head>
  
    <body>
			<?php include 'header.php';?>
		
		<main>
			<article>
				<h1>Новая инициатива</h1>
				<section>
					<form id="addInitiativeForm" method="post" action="newInitiative.php" enctype="multipart/form-data">
						<textarea name="header" id="addInitiativeFormHeader" class="addInitiativeFormInput" minlength="3" maxlength="100" required placeholder="Заголовок"></textarea>
						<textarea name="description" id="addInitiativeFormDescription" class="addInitiativeFormInput" minlength="3" maxlength="1500" required placeholder="Описание"></textarea>
						<input type="file" name="image" id="addInitiativeImageInput" required accept="image/png, image/jpeg, image/jpg">
						<label for="addInitiativeImageInput">
							<img id="addInitiativeFormImage" src="./img/addInitiativeFormImageInput.png"/>
						</label>
						<button type="submit" class="headerButtonBlack backgroundBlack regAuthSubmit" name="submit" value="submit">ОТПРАВИТЬ</button>
					</form>
					<div>
						<img src="./img/addInitiativeInfo.png"/>
					</div>
				</section>
			</article>
		</main>
		
		<?php include 'footer.php';?>
    </body>
</html>