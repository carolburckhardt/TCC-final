<?php $_SESSION['posto'] = $_GET['posto']; 

     include '../controllers/pdo.php'; 
     $query = "SELECT * FROM postos WHERE id ='".$_SESSION['posto']."';"; 
     $stmt = $pdo->query($query);
     $postonome = $stmt->fetch();
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<h2>Remedios Disponiveis no posto <?php echo $postonome['posto'];?></h2>
<h3 style="width:60%;"></h3>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquisar..." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Remedio</th>
    <th style="width:40%;">Quantidade</th>
  </tr>
  <?php foreach($remedios as $remedio) {?>
    <tr>
        <td><?php echo $remedio['nome_remedio'];?></td>
        <td><?php echo $remedio['qtd'];?></td>
        <?php
        $id_remedio = $remedio['id_remedio'];
        ?>
        <?php
          if($usuario['id_tipuser'] == 0){
        ?>
             <td ><a href="../controllers/excluirRemedio.php?id=<?=$id_remedio?>" class="ui negative basic button" onclick="return confirm('Tem certeza que deseja EXCLUIR este remedio?');">Excluir</a></td>
            <td ><a href="editarRemedio.php?posto=<?=$posto?>&id=<?=$id_remedio?>" class="ui positive basic button" >Editar</a></td>;
          <?php }; ?>
        
    </tr>
    <?php } ?>
            
</table>
<?php

if($usuario['id_tipuser'] == 0){
             echo ' 
             <tr>
             <td><a href="formRemedios.php?posto='.$posto.'"><br><br><h1 class="ui primary basic button">Adicionar Remedio</h1></a></td>
            </tr>';
            
           }?>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>