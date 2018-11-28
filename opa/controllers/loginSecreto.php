<?php
if(sizeof($_POST)>0){
	$stmt = $pdo->query("SELECT * FROM user WHERE rSecreta='".$_POST['rSecreta']."'");
	while($row = $stmt->fetch()){
		if(!empty($row['email']) and sizeof($stmt->fetch())>0){
			$_SESSION["email"] = $row['email'];
			$_SESSION["senha"] = $row['password'];	
			header('Location: home.php');
		}
	}
}    

?>