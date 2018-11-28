<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../Semantic/semantic.css">
	<link rel="stylesheet" href="../styles/index.css">
	<meta charset="utf-8">
	<title>Login</title>
</head>

		 <link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
        <link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
        <link rel="canonical" href="https://codepen.io/anon/pen/jvvryM">
        <link rel="stylesheet" type="text/css" href="../Semantic/semantic.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="stylesheet" type="text/css" href="../styles/cadastrar.css">
        
	<body>
		<article class="ui centered grid stackable" id="login">
			<div class="ui middle aligned center aligned grid">
				<div class="column">
					<h2 class="ui teal image header">
						<img class="ui massive image" src="logo.png">
						<div class="content">
							Busca Medicamentos Online
						</div>
					</h2>
					<form class="ui large form" method='post'>
						<div class="ui stacked segment">
							<div class="field">
								<div class="ui left icon input">
									<i class="user icon"></i>
									<input type="text" name="nome" placeholder="E-mail">
								</div>
							</div>
							<div class="field">
								<div class="ui left icon input">
									<i class="lock icon"></i>
									<input type="password" name="senha" placeholder="Senha">
								</div>
								
							</div>
							<button class="ui primary fluid large basic button" type="submit">
								Entrar
							</button>
						
					</form>
				</div>
			</div>
		</article>
	</body>
</html>
<?php
	include '../controllers/pdo.php';
	include '../controllers/loginAdm.php';