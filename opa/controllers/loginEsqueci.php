<?php
if(sizeof($_POST)>0){
	$stmt = $pdo->query("SELECT * FROM user WHERE email='".$_POST['email']."' ");
    $psecreta = $stmt->fetch();
    $x = $psecreta['pSecreta'];
	header("Location: loginSecreto.php?email=$_POST[email]&psecreta=$x");
	}
	

?>