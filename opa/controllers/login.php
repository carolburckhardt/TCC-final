<?php
if(sizeof($_POST)>1){
	$stmt = $pdo->query("SELECT * FROM user WHERE email='".$_POST['email']."' and senha='".$_POST['password']."'");
	$row = $stmt->fetch();
		if($_POST['password'] == $row['senha']){
			if(!empty($row['email']) and sizeof($stmt->fetch())>0){
				$_SESSION["email"] = $_POST['email'];
				$_SESSION["senha"] = $_POST['password'];
				header('Location: home.php');
			}
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("senha incorreta")';
			echo '</script>';
		}   

}    

?>