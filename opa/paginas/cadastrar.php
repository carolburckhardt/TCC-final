<?php
error_reporting(E_ERROR | E_PARSE);
  	include '../controllers/pdo.php';
    include '../controllers/cadastrarUsuario.php';
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../Semantic/semantic.css">
  <link rel="stylesheet" type="text/css" href="../styles/cadastrar.css"> 
  <meta charset="utf-8">
  <title>Cadastro</title>
</head>

<style type="text/css">

head, body{
  background: #4F97A7;
}

#cadastro{
	width: 600px;
	height: 600px;
	margin-top: -30px;
	position: relative;
	left: 400px;
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

  <article class="ui " id="cadastro" >
    <div class="ui">
      <div class="column six">
       
     <br>
     <br>

        <form class="ui large  form" id="formulario" method='POST'>
          <div class="ui stacked segment">
            <div class="field">
              <div class="ui left input">
                <input type="text" name="nome" placeholder="Nome">
              </div>
            </div>
            <div class="field">
              <div class="ui left input">
                <input type="email" name="email" placeholder="E-mail">
              </div>
            </div>
            <div class="field">
            
          
            <div class="field">
              <div class="ui left input">
                <input type="number" name="cpf" placeholder="CPF">
                <div class="field">
              <div class="ui left input">
                <input type="date" name="dataNascimento" placeholder="Data de nascimento">
              </div>
            </div>
              </div>
            </div>
            
            <div class="field">
              <div class="ui left input">
                <input type="password" name="senha" placeholder="Senha">
              <div class="ui left input">
                <input type="tel" name="telefone" placeholder="Telefone">
              </div>
            </div>
              </div>
            </div>
            <div class="field">
              <div class="ui left input">
                <input type="password" name="confirmarSenha" placeholder="Confirmação da Senha">
              </div>
              </div>
              <div class="field">
              <div class="ui left input">
                <input type="text" name="pSecreta" placeholder="pergunta secreta">
              <div class="ui left input">
                <input type="text" name="rSecreta" placeholder="resposta secreta">
              </div>
          </div>
            </div>
            <div class="field">
              <div class="ui left input">
                <input type="number" name="cep" placeholder="CEP">
                <div class="ui left input" id="bairro">
              <select name="bairro">
                  <option value="0">Aventureiro I </option>
                  <option value="1">Comasa</option>
                  <option value="2">Jardim Iririú</option>
                  <option value="3">Itaum</option>
                  <option value="4">Leonardo Schilickmann</option>
                  <option value="5">Parque Joinville</option>
                  <option value="6">Bom Retiro</option>
                  <option value="7">Costa e Silva</option>
                  <option value="8">Fátima</option>
                  <option value="9">Floresta</option>
                  <option value="10"> Bucal Morro do Meio</option>
                  <option value="11"> Edla Jordan</option>
                  <option value="12"> Vila Nova</option>
            </select>
                </div>
              </div>
            </div>
            <div class="field">
              <div class="ui left input">
                <input type="text" name="rua" placeholder="Rua">
                <div class="ui left input" id="numero">
                  <input type="number" name="numero" placeholder="N°">
                </div>
              </div>
            </div>
            <div class="ui centered grid">
            <div class="row">
              <a href="../index.php"><div class="ui negative basic button">Cancelar</div></a>
              <button class="ui primary basic button" type="submit">
              Cadastrar
            </button>
            </div>
            </div>
          </div>

      </form>
</body>

</html>
