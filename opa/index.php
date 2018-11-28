<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Homepage - Semantic</title>
  <link rel="stylesheet" type="text/css" href="Semantic/semantic.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/transition.css">

  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 1em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
        color: white;
      }

  


  </style>

  <script src="assets/library/jquery.min.js"></script>
  <script src="../dist/components/visibility.js"></script>
  <script src="../dist/components/sidebar.js"></script>
  <script src="../dist/components/transition.js"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui grid large top fixed hidden menu">
  <div class="ui container">
    <div class="right menu">
      <div class="item">
        <a class="ui button">Entrar</a>
      </div>
      <div class="item">
        <a class="ui primary button">Cadastre-se</a>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui grid vertical inverted sidebar menu">
  <a class="item">Entrar</a>
  <a class="item">Cadastre-se</a>
</div>



<div class="pusher">
  
  <div class="ui inverted vertical masthead center aligned segment ">

    <div class="ui container">
      <div class="ui large secondary inverted  menu">
        <div class="left item">

          <img class="ui tiny image" src="logo.png">
          <h1>BUSCA MEDICAMENTOS ONLINE</h1>
          <br>
          <img class="ui tiny image" src="sus.png">

        </div>

        <div class="right item">
          <a href="http://localhost/opa/paginas/inicio.php" class="ui inverted button">Entrar</a>
          <a href="http://localhost/opa/paginas/cadastrar.php" class="ui inverted button">Cadastre-se</a>
          
        </div>
      </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="ui text container">
      <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class=" column">
          <h3>O QUE É?</h3>
          <p> É um site que mostra os medicamentos disponíveis em postos de saúde de Joinville.</p>
        </div>
        <div class="column ">
          <h3>MAIS INFORMAÇÕES</h3>
          <p>Além disso aqui você consegue filtrar os medicamentos de acordo com o posto de saúde mais perto da sua residência. Faça o cadastro e facilite sua vida! </p>
          
        </div>
      </div>
    </div>
  </div>
      
    </div>

  </div>


  <div class= "ui black inverted vertical footer segment">
    <div class="ui  container">
      <div class="ui stackable inverted divided equal height stackable grid">
          <div class="seven wide column">
          <h4 class="ui inverted header">Desenvolvido por:</h4>
          <p>Carolina Burckhardt Luciani</p>
          <p>Rafaela Gilgen</p>
          <p>Suyanne Xavier da Cunha</p>
        </div>

        <div class="three wide column">
          <h4 class="ui inverted header">Contatos</h4>
          <div class="ui inverted link list">
            <a href="https://www.joinville.sc.gov.br/" class="item">Site Prefeitura - Telefone Postos</a>
            <a href="https://mail.google.com/mail/u/0/" class="item">E-mail</a>
            <a href="#" class="item">Ouvidoria</a>
            
          </div>
        </div>
       
       
      </div>
    </div>
  </div>
</div>

</body>

</html>