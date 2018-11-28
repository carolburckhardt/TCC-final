<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../Semantic/semantic.css">
	<link rel="stylesheet" href="../styles/index.css">
	<meta charset="utf-8">
	<title>Login</title>
</head>

<style type="text/css">

head, body{
	background: #4F97A7;
}

#login{
  width: 400px;
  height: 350px;
  margin-top: 20px;
  position: relative;
  left: 500px;
}

</style>

	<body>

    <div class="ui container">
      <div class="ui large secondary inverted  menu">
        <div class="left item">
          <img class="ui tiny image" src="../logo.png">
          <h1>BUSCA DE MEDICAMENTOS ONLINE</h1>
          <br>
          <img class="ui tiny image" src="../sus.png">

        </div>
          
        </div>
      </div>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
		<article class="ui " id="login">
			<div class="ui ">
				<div class="column">
					
						<form class="ui large form" method='POST'>
						<div class="ui stacked segment">
							<div class="field">
								<div class="ui left icon input">
									<i class="user icon"></i>
									<input type="text" name="email" placeholder="E-mail">
								</div>
							</div>
							<div class="field">
								<div class="ui left icon input">
									<i class="lock icon"></i>
									<input type="password" name="password" placeholder="Senha">
								</div>
								<br><br>
								<a href="esquecisenha.php">esqueci a senha</a>
							</div>
													

							<div class="ui centered grid">
            <div class="row">
              <a href="../index.php"><div class="ui negative basic button">Cancelar</div></a>
              <button class="ui primary basic button" type="submit">
              Entrar
            </button>
            </div>
            </div>
						</div>

						<!-- <br>
						<a href="login_admin.php">Administrador</a> -->
					</form>
				</div>
			</div>
		</article>
	</body>
</html>

<?php
	include '../controllers/pdo.php';
	include '../controllers/login.php';