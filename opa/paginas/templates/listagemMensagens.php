<?php $_SESSION['posto'] = $_GET['posto']; ?>


<div class="ui disabled segment">
  <p></p>
</div>
<h2>Avisos</h2>
<div class="ui disabled segment"></div>
<div class="ui grid">

<?php  foreach($avisos as $aviso) {

    ?>

<h3>    
<div class="ui grid">

    <div class="column">
    <div class="ui card">
    <div class="content">
        <div class="header"> <? echo $aviso['titulo_msg']; ?></div>
        <div class="description">
            <?php echo $aviso['texto_msg']; ?>
        </div>
    </div>
    <?php
          if($usuario['id_tipuser'] == 0){
        ?>
    <td><a href="../controllers/deletarMensagem.php?posto=<?=$posto?>&id=<?= $aviso['cod_agenda']?>" class="ui negative basic button" >Excluir</a></td>
    <td><a href="editarMensagem.php?posto=<?=$posto?>&id=<?= $aviso['cod_agenda']?>" class="ui positive basic button" >Editar</a></td>
          <?php } ?>
    </div>
</div>
</div>
</h3>
<?php } ?>
</div>
<?php
if($usuario['id_tipuser'] == 0){
             echo ' 
             <tr>
             <td><a href="cadastrarAviso.php?posto='.$posto.'"><br><br><h1 class="ui primary basic button">Cadastrar Aviso</h1></a></td>
            </tr>';
            
           }?>
