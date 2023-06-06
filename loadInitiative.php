<?php
    session_start();
    include('config.php');
   // if (isset($_POST['loadInitiative'])) {
        $id = $_POST['id'];
        $query = $connection->prepare("SELECT * FROM initiatives WHERE id=:id");
        $query->bindParam("id", $id, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() == 0) {
			echo 'Такой инициативы не существует';
        }
        if ($query->rowCount() > 0) {
			$row = $query->fetch();
			$query2 = $connection->prepare("SELECT COUNT(*) as count FROM likes WHERE initiative_id=:id");
			$query2->bindParam("id", $row["id"], PDO::PARAM_STR);
			$query2->execute();
			$row2 = $query2->fetch();
            echo '<section>
					<div>
						<h1>'.$row["header"].'</h1>
						<p>'.$row["description"].'</p>
						<button onclick="Like('.$row["id"].')"';
						if ($row["state"] != 'actual') {
							echo 'disabled class="disabled"';
						}
						echo '>
							<img src="./img/like2.png" /><span id="likes'.$row["id"].'">('.$row2["count"].')</span>Голосовать
						</button>
					</div>
					<div id="imgDiv">
						<img src="./uploads/initiativesImg/'.$row["image"].'"/>
					</div>
				</section>';
			if (isset($_SESSION["user_id"]) && $_SESSION["user_role"] == "admin") {
				if ($row["state"] == "toModerate") {
					echo '<button class="adminButtons" onclick="EditStateInitiative(\'actual\');">В актуальные</button>
					<button class="adminButtons" onclick="EditStateInitiative(\'removed\');">Удалить</button>';
				}
				else if ($row["state"] == "actual") {
					echo '<button class="adminButtons" onclick="EditStateInitiative(\'completed\');">В выполненные</button>
					<button class="adminButtons" onclick="EditStateInitiative(\'removed\');">Удалить</button>';
				}
				else if ($row["state"] == "completed") {
					echo '<button class="adminButtons" onclick="EditStateInitiative(\'removed\');">Удалить</button>';
				}
			}
        }
 //   }
?>