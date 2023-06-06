<?php
    session_start();
    include('config.php');
    if (isset($_POST['register'])) {
        $fio = $_POST['fio'];
		$birthDate = $_POST['birthDate'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection->prepare("SELECT * FROM users WHERE mail=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
            echo '<!DOCTYPE html>
					<html lang="ru">
						<head>
							<meta charset="UTF-8" />
							<meta http-equiv="X-UA-Compatible" content="IE=edge" />
							<meta name="viewport" content="width=device-width, initial-scale=1.0" />
							<link rel="stylesheet" href="./register.css" />
							<link rel="preconnect" href="https://fonts.googleapis.com">
							<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
							<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
							<script src="./script.js"></script>
							<title>Инициативы Оренбурга</title>
						</head>
					  
						<body>';
				include 'header.php';
							
				echo '<main>
					<section class="wrapper">
						<div style="display: block" id="registerDiv">
							<button id="toAuthButton" onclick="RegAuthSwitch(\'auth\');">Вход</button>
							<button id="toRegistButton" class="selectedDiv">Регистрация</button>
							<form id="registForm" method="post" action="register.php">
								<input type="text" name="fio" class="regAuthInput" placeholder="ФИО" minlength="3" maxlength="255" required value="'.$_POST['fio'].'" pattern="^[a-zA-ZА-Яа-яЁё\s]+$" title="ФИО может содержать только буквы латинского и русского алфавитов и пробелы." />
								<input type="text" name="birthDate" class="regAuthInput" placeholder="Дата рождения" required value="'.$_POST['birthDate'].'" onfocus="(this.type=\'date\')" onblur="if(this.value==\'\'){this.type=\'text\'}"/>
								<input type="text" name="phone" class="regAuthInput" value="'.$_POST['phone'].'" placeholder="Телефон в формате 8XXXXXXXXXX"
									pattern="[8][0-9]{10}" required />
								<input type="text" name="address" class="regAuthInput" placeholder="Адрес проживания" value="'.$_POST['address'].'" maxlength="255" />
								<input type="email" name="email" class="regAuthInput" placeholder="Почта" maxlength="255" value="'.$_POST['email'].'" required />
								<input type="password" name="password" class="regAuthInput" placeholder="Пароль" minlength="8" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n]).*" maxlength="30" required title="Пароль должен составлять от 8 до 30 символов латинского алфавита или цифр." />
								<p class="error">Аккаунт с такой почтой уже зарегистрирован!</p>
								<button type="submit" class="headerButtonBlack backgroundBlack regAuthSubmit" name="register" value="register">ЗАРЕГИСТРИРОВАТЬСЯ</button>
							</form>
						</div>
						<div style="display: none" id="authDiv">
							<button id="toAuthButton" class="selectedDiv">Вход</button>
							<button id="toRegistButton" onclick="RegAuthSwitch(\'reg\');">Регистрация</button>
							<form id="form" method="post" action="auth.php">
								<input type="email" name="email" class="regAuthInput" placeholder="Почта" value=""/>
								<input type="password" name="password" class="regAuthInput" placeholder="Пароль"/>
								<button type="submit" name="login" class="headerButtonBlack backgroundBlack regAuthSubmit" value="login">Войти</button>
							</form>
						</div>
					</section>
				</main>';
				
				include 'footer.php';
				echo '</body>
					</html>';
        }
        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO users(name, birthDate, phone, address, mail, password) VALUES (:fio, :birthDate, :phone, :address, :email, :password_hash)");
            $query->bindParam("fio", $fio, PDO::PARAM_STR);
			$query->bindParam("birthDate", $birthDate, PDO::PARAM_STR);
			$query->bindParam("phone", $phone, PDO::PARAM_STR);
			$query->bindParam("address", $address, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $result = $query->execute();
            if ($result) {
                header('Location: /registration.php');
            } else {
                echo '<!DOCTYPE html>
					<html lang="ru">
						<head>
							<meta charset="UTF-8" />
							<meta http-equiv="X-UA-Compatible" content="IE=edge" />
							<meta name="viewport" content="width=device-width, initial-scale=1.0" />
							<link rel="stylesheet" href="./register.css" />
							<link rel="preconnect" href="https://fonts.googleapis.com">
							<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
							<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
							<script src="./script.js"></script>
							<title>Инициативы Оренбурга</title>
						</head>
					  
						<body>';
				session_destroy();
				include 'header.php';
							
				echo '<main>
					<section class="wrapper">
						<div style="display: block" id="registerDiv">
							<button id="toAuthButton" onclick="RegAuthSwitch(\'auth\');">Вход</button>
							<button id="toRegistButton" class="selectedDiv">Регистрация</button>
							<form id="registForm" method="post" action="register.php">
								<input type="text" name="fio" class="regAuthInput" placeholder="ФИО" minlength="3" maxlength="255" required value="'.$_POST['fio'].'" pattern="^[a-zA-ZА-Яа-яЁё\s]+$" title="ФИО может содержать только буквы латинского и русского алфавитов и пробелы." />
								<input type="text" name="birthDate" class="regAuthInput" placeholder="Дата рождения" required value="'.$_POST['birthDate'].'" onfocus="(this.type=\'date\')" onblur="if(this.value==\'\'){this.type=\'text\'}"/>
								<input type="text" name="phone" class="regAuthInput" value="'.$_POST['phone'].'" placeholder="Телефон в формате 8XXXXXXXXXX"
									pattern="[8][0-9]{10}" required />
								<input type="text" name="address" class="regAuthInput" placeholder="Адрес проживания" value="'.$_POST['address'].'" maxlength="255" />
								<input type="email" name="email" class="regAuthInput" placeholder="Почта" maxlength="255" value="'.$_POST['email'].'" required />
								<input type="password" name="password" class="regAuthInput" placeholder="Пароль" minlength="8" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n]).*" maxlength="30" required title="Пароль должен составлять от 8 до 30 символов латинского алфавита или цифр." />
								<p class="error">Неверные данные!</p>
								<button type="submit" class="headerButtonBlack backgroundBlack regAuthSubmit" name="register" value="register">ЗАРЕГИСТРИРОВАТЬСЯ</button>
							</form>
						</div>
						<div style="display: none" id="authDiv">
							<button id="toAuthButton" class="selectedDiv">Вход</button>
							<button id="toRegistButton" onclick="RegAuthSwitch(\'reg\');">Регистрация</button>
							<form id="form" method="post" action="auth.php">
								<input type="email" name="email" class="regAuthInput" placeholder="Почта" value=""/>
								<input type="password" name="password" class="regAuthInput" placeholder="Пароль"/>
								<button type="submit" name="login" class="headerButtonBlack backgroundBlack regAuthSubmit" value="login">Войти</button>
							</form>
						</div>
					</section>
				</main>';
				
				include 'footer.php';
				echo '</body>
					</html>';
            }
        }
    }
?>