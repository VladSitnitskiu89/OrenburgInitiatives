<?php
    include('config.php');
        $id = $_POST['id'];
		$state = $_POST['state'];
        $query = $connection->prepare("UPDATE initiatives SET state=:state WHERE id=:id");
		$query->bindParam("state", $state, PDO::PARAM_STR);
        $query->bindParam("id", $id, PDO::PARAM_STR);
        $result = $query->execute();
        echo $result;    
?>