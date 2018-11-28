<?php
include('../controllers/pdo.php') ;
include('../controllers/coletarDados.php') ;
include('../controllers/checarLogin.php') ;
?>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
        <link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111">
        <link rel="canonical" href="https://codepen.io/anon/pen/jvvryM">
        <link rel="stylesheet" type="text/css" href="../Semantic/semantic.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
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
        
        <article class="larg">
            
            <?php

            if($usuario['id_tipuser']!=0){
                ?><h2>Selecione qualquer Posto</h2><?php
                include("templates/formPostos.php");
            }
            ?>
            </article>

            <h2> Posto no seu Bairro</h2>
        <article class="larg">
            <div>
            <a href="listaRemedios.php?posto=<?=$usuario['bairro']?>"><button class="ui primary basic button">Entrar no posto</button></a>
            </div>    
        </article>
        </main>
</html>
<script src="//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js"></script>
        <script src="//static.codepen.io/assets/editor/live/css_live_reload_init-e9c0cc5bb634d3d14b840de051920ac153d7d3d36fb050abad285779d7e5e8bd.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../dashboard.js">
</script>
