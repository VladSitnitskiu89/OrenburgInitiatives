<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./header.css" />
		<link rel="stylesheet" href="./footer.css" />
		<link rel="stylesheet" href="./register.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
		<script src="./script.js"></script>
		<title>Инициативы Оренбурга</title>
    </head>
  
    <body>
			<?php include 'header.php';?>
		
		<main>
			<section class="wrapper">
				<div id="registerDiv">
					<button id="toAuthButton" onclick="RegAuthSwitch('auth');">Вход</button>
					<button id="toRegistButton" class="selectedDiv">Регистрация</button>
					<form id="registForm" method="post" action="register.php">
						<input type="text" name="fio" class="regAuthInput" placeholder="ФИО" minlength="3" maxlength="255" required pattern="^[a-zA-ZА-Яа-яЁё\s]+$" title="ФИО может содержать только буквы латинского и русского алфавитов и пробелы." />
						<input type="text" name="birthDate" class="regAuthInput" placeholder="Дата рождения" required onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}"/>
						<input type="text" name="phone" class="regAuthInput" placeholder="Телефон в формате 8XXXXXXXXXX"
							pattern="[8][0-9]{10}" required />
						<input type="text" name="address" class="regAuthInput" placeholder="Адрес проживания" maxlength="255" />
						<input type="email" name="email" class="regAuthInput" placeholder="Почта" maxlength="255" required />
						<input type="password" name="password" class="regAuthInput" placeholder="Пароль" minlength="8" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n]).*" maxlength="30" required title="Пароль должен составлять от 8 до 30 символов латинского алфавита или цифр." />
						<button type="submit" class="headerButtonBlack backgroundBlack regAuthSubmit" name="register" value="register">ЗАРЕГИСТРИРОВАТЬСЯ</button>
					</form>
				</div>
				<div id="authDiv">
					<button id="toAuthButton" class="selectedDiv">Вход</button>
					<button id="toRegistButton" onclick="RegAuthSwitch('reg');">Регистрация</button>
					<form id="form" method="post" action="auth.php">
						<input type="email" name="email" class="regAuthInput" placeholder="Почта"/>
						<input type="password" name="password" class="regAuthInput" placeholder="Пароль"/>
						<button type="submit" name="login" class="headerButtonBlack backgroundBlack regAuthSubmit" value="login">Войти</button>
					</form>
				</div>
			</section>
		</main>
		
		<?php include 'footer.php';?>
    </body>
</html>