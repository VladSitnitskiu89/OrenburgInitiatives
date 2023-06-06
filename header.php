		<header>
			<a href="./index.php"><img src="./img/logo.png"/></a>
			<input type="text" id="searchField" placeholder="Поиск"/>
			<a id="addInitiative" class="black headerButton" href="./addInitiative.php">ПРЕДЛОЖИТЬ ИНИЦИАТИВУ</a>
			<a id="completeInitiatives" class="black headerButton" href="./completeInitiatives.php">ВЫПОЛНЕННЫЕ ИНИЦИАТИВЫ</a>
			<a id="rules" class="black headerButton" href="./rules.php">ПРАВИЛА РАБОТЫ</a>
			<?php
				if(session_status() !== PHP_SESSION_ACTIVE) session_start();
				if (!isset($_SESSION["user_id"])) {
					echo '<a class="backgroundBlack headerButton headerButtonBlack" href="registration.php">ВОЙТИ</a>';
				}
				else {
					echo 
					'<button id="openHeaderMenuButton" onclick="OpenCloseMenu(\'open\');">';
					
					$FILES = get_included_files();  // Retrieves files included as array($FILE)
					$FILE = 'config.php';               // Set value of current file with absolute path
					if(!in_array($FILE, $FILES)){   // Checks if file $FILE is in $FILES
					  include_once 'config.php';  // Includes file with include_once if $FILE is not found.
					}

				$query = $connection->prepare("SELECT * FROM users WHERE id=:id");
				$query->bindParam("id", $_SESSION["user_id"], PDO::PARAM_STR);
				$query->execute();
				$result = $query->fetch(PDO::FETCH_ASSOC);
				if (!$result) {
				} 
				else {
					echo $result["mail"].' &or;';
				}
				echo 	'</button>
						<div id="headerMenuDiv">
							<button id="closeHeaderMenuButton" onclick="OpenCloseMenu(\'close\');"><span>'.$result["mail"].'</span><span id="span2">&times;</span></button>
							<div id="moreButtons">';
							if ($_SESSION["user_role"] == "admin") {
								echo '<p><a href="./toModerate.php">На модерацию</a></p>';
							}
								echo '<p><a href="./myInitiatives.php">Мои инициативы</a></p>
								<p><a href="./exit.php">Выйти</a></p>
							</div>
						</div>';
				}
			?>
		</header>