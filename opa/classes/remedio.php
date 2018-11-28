<?php
    
    class Remedio{

        function cadastrarRemedio(){

            include('../controllers/pdo.php');

            if(sizeof($_POST)>1){
                $query = "INSERT INTO inventario (nome_remedio, qtd, cod_posto)
                        VALUES ('".$_POST['nome_r']."', '".$_POST['qtd']."','".$_GET['posto']."');";
                $stmt = $pdo->query($query);
            
                echo '<script language="javascript">';
                echo 'alert("remedio cadastrado com sucesso")';
                echo '</script>';
            }

            }
        function coletarRemedios($posto){

            include('../controllers/pdo.php');

            $query = "SELECT * FROM inventario WHERE cod_posto = $posto"; 
            $stmt = $pdo->query($query);
            $remedios = $stmt->fetchALL(PDO::FETCH_ASSOC);
            return $remedios;
        }
            
        function coletarRemedioExpecifico($posto,$id){
            include('../controllers/pdo.php');

            $query = "SELECT * FROM inventario WHERE cod_posto = $posto AND id_remedio = $id"; 
            $stmt = $pdo->query($query);
            $remedios = $stmt->fetch();
            return $remedios;
        } 

        function editarRemedio($posto){
            include('../controllers/pdo.php');
            if(sizeof($_POST)>1){
                $query = "UPDATE inventario
                            SET nome_remedio = '".$_POST['nome']."', qtd = '".$_POST['qtd']."'
                        WHERE id_remedio = '".$_GET['id']."';";
            
                $stmt = $pdo->query($query);
            
                echo '<script language="javascript">';
                echo 'alert("editado com sucesso")';
                echo '</script>';
                header("location: ../paginas/listaRemedios.php?posto=$posto");
            }
    
        }

        function deletarRemedio(){

            include '../controllers/pdo.php'; 
      
            $posto = $_SESSION['posto'];

            $query = "DELETE FROM inventario WHERE id_remedio='".$_GET['id']."'";

            $stmt = $pdo->query($query);
            

            header("Location: ../paginas/listaRemedios.php?posto=$posto");    
    
        }
    }
    $obj_remedio = new Remedio();
    ?>