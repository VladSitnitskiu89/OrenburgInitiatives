<?php
    session_start();
    include('config.php');
   // if (isset($_POST['loadInitiative'])) {
        $id = $_POST['id'];
		$last_id = 0;
		$state = $_POST['state'];
        $query = $connection->prepare("SELECT * FROM initiatives WHERE id>:id AND state=:state ORDER BY id LIMIT 6 ");
        $query->bindParam("id", $id, PDO::PARAM_STR);
		$query->bindParam("state", $state, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
			$data = $query->fetchAll();
			foreach ($data as $row) {
				$query2 = $connection->prepare("SELECT COUNT(*) as count FROM likes WHERE initiative_id=:id");
				$query2->bindParam("id", $row["id"], PDO::PARAM_STR);
				$query2->execute();
				$row2 = $query2->fetch();
				$last_id = $row["id"];
				echo '<section>
						<a href="./initiative.php#'.$row["id"].'" target="_blank">
							<div>
							<img src="./uploads/initiativesImg/'.$row["image"].'"/>
								<h2>'.$row["header"].'</h2>
								<p>'.$row["description"].'</p>
							</div>
						</a>	
						<button onclick="Like('.$row["id"].')"';
						if ($state != 'actual') {
							echo 'disabled class="disabled"';
						}
						echo '>
							<img src="./img/like.png" /><span id="likes'.$row["id"].'">('.$row2["count"].')</span>Голосовать
						</button>
					</section>';
			}
			echo '*'.$last_id;
        }
 //   }
?>