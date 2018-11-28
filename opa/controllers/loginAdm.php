<?php 
    if(sizeof($_POST)>1){
		$stmt = $pdo->query("SELECT nome_adm FROM admins WHERE nome_adm='".$_POST['nome']."' and senha_adm='".$_POST['senha']."'");
        
        while($row = $stmt->fetch()){
			if(!empty($row['nome_adm']) and sizeof($stmt->fetch())>0){
				$_SESSION["nome_adm"] = $_POST['nome'];
				$_SESSION["senha_adm"] = $_POST['senha'];
				header('Location: ../home.php');
			}
		}
    }

 ?>