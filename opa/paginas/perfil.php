<?php 
  include '../controllers/pdo.php';
  include '../controllers/coletarDados.php';    
  include '../controllers/editarUsuario.php';
  include '../controllers/checarLogin.php';
  include '../controllers/deletarUsuario.php';

  include '../controllers/pdo.php'; 
  $query = "SELECT * FROM postos WHERE id ='".$usuario['bairro']."';"; 
  $stmta = $pdo->query($query);
  $postonome = $stmta->fetch();
?>

<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
        <link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
        <link rel="canonical" href="https://codepen.io/anon/pen/jvvryM">
        <link rel="stylesheet" type="text/css" href="../Semantic/semantic.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="stylesheet" type="text/css" href="../styles/cadastrar.css">
        
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>

        <span class="bckg"></span>
        <header>
        <h1></h1>
        <?php include("templates/nav.html"); ?>
        </header>
        <main>
        <?php include 'templates/welcome.php'?>
       <h2>Editar Perfil <?php echo $usuario['nome'] ?> </h2>

       <br>
       <br>
       <br>
        <article class="ui centered grid" id="cadastro" >

        <form class="ui large form" id="formulario" method='POST'>
          <div class="ui stacked segment">
            <div class="field">
              <div class="ui left input">
              <input type="text" name="nome" placeholder="Nome" value="<?= $usuario['nome'] ?>">
              </div>
            </div>
            <div class="field">
              <div class="ui left input">
              <input type="email" name="email" placeholder="E-mail" value="<?= $usuario['email'] ?>">
              </div>
            </div>

            <div class="field">
              <div class="ui left input">
              <input type="tel" name="telefone" placeholder="Telefone" value="<?= $usuario['tel'] ?>">
              </div>
            </div>

            <div class="field">
              <div class="ui left input">
              <input type="date" name="dataNascimento" placeholder="Data de nascimento" value="<?= $usuario['dt_nasc'] ?>">
              </div>
            </div>

            <div class="field">
            <select name="bairro">
                <option value="<?php echo $postonome['id']?>">Seu posto: <?php echo $postonome['posto'] ?></option>
                <option value="0">UBS Aventureiro I </option>
                <option value="1">UBS Comasa</option>
                <option value="2">UBS Jardim Iririú</option>
                <option value="3">UBS Itaum</option>
                <option value="4">UBS Leonardo Schilickmann</option>
                <option value="5">UBS Parque Joinville</option>
                <option value="6">UBS Bom Retiro</option>
                <option value="7">UBS Costa e Silva</option>
                <option value="8">UBS Fátima</option>
                <option value="9">UBS Floresta</option>
                <option value="10">UBS Bucal Morro do Meio</option>
                <option value="11">UBS Edla Jordan</option>
                <option value="12">UBS Vila Nova</option>
            </select>

            </div>

            <div class="field">
              <div class="ui left input">
              <input type="text" name="rua" placeholder="Rua" value="<?= $usuario['rua'] ?>">
              </div>
            </div>

            <div class="field">
              <div class="ui left input">
              <input type="number" name="numero" placeholder="N°" value="<?= $usuario['numero'] ?>">
              </div>
            </div>
            <div class="field"> trocar de senha
              <div class="ui left input">
              <input type="password" name="senha" placeholder="senha antiga">
              </div>
            </div>
            <div class="field">
              <div class="ui left input">
              <input type="password" name="novaSenha" placeholder="nova senha">
              </div>
            </div>
            <div class="ui centered grid">
            <div class="row">
             <td ><a href="../controllers/deletarUsuario.php?deletar=sim" class="ui negative basic button" onclick="return confirm('Tem certeza que deseja EXCLUIR sua conta?');">Excluir</a></td>
              
              <button class="ui primary basic button" type="submit">
              cadastrar
            </button>
            </div>
            </div>
          </div>
        </article>
        </main>
</html>
<script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script>
        <script src="//static.codepen.io/assets/editor/live/css_live_reload_init-e9c0cc5bb634d3d14b840de051920ac153d7d3d36fb050abad285779d7e5e8bd.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../dashboard.js">
</script>
