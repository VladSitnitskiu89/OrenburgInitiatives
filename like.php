<?php
    session_start();
    include('config.php');
   // if (isset($_POST['loadInitiative'])) {
	    if (!isset($_SESSION["user_id"])) {
			echo 'goRegister';
			die;
	    }
		$id = $_POST['id'];
		$user_id = $_SESSION["user_id"];
        $query = $connection->prepare("SELECT * FROM likes WHERE initiative_id=:id AND user_id=:user_id");
        $query->bindParam("id", $id, PDO::PARAM_STR);
		$query->bindParam("user_id", $user_id, PDO::PARAM_STR);
        $query->execute();
        if ($query->rowCount() > 0) {
			echo 'nothing';
		}
		else {
			$query = $connection->prepare("INSERT INTO likes(initiative_id, user_id) VALUES (:initiative_id, :user_id)");
			$query->bindParam("initiative_id", $id, PDO::PARAM_STR);
			$query->bindParam("user_id", $user_id, PDO::PARAM_STR);
			$result = $query->execute();
			if ($result) {
				$query2 = $connection->prepare("SELECT COUNT(*) as count FROM likes WHERE initiative_id=:id");
				$query2->bindParam("id", $id, PDO::PARAM_STR);
				$query2->execute();
				$row2 = $query2->fetch();
				echo '('.$row2["count"].')';
			}
		}
?>