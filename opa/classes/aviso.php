<?php
    
    class Aviso{

        function cadastrarAviso(){

            include('../controllers/pdo.php');

            if(sizeof($_POST)>1){
                $query = "INSERT INTO avisos (texto_msg, titulo_msg, cod_posto)
                        VALUES ('".$_POST['texto_msg']."', '".$_POST['titulo_msg']."','".$_GET['posto']."');";
                $stmt = $pdo->query($query);
            
                echo '<script language="javascript">';
                echo 'alert("Aviso sera exibido na pagina do posto")';
                echo '</script>';
            }

        }

        function coletarAvisos($posto){

            include('../controllers/pdo.php');

            $query = "SELECT * FROM avisos WHERE cod_posto = $posto"; 
            $stmt = $pdo->query($query);
            $avisos = $stmt->fetchALL(PDO::FETCH_ASSOC);
            return $avisos;
        }
            
        function coletarAvisoExpecifico($posto,$id){
            include('../controllers/pdo.php');

            $query = "SELECT * FROM avisos WHERE cod_posto = $posto AND cod_agenda = $id"; 
            $stmt = $pdo->query($query);
            $mensagem = $stmt->fetch();
            return $mensagem;
        }

        function editarAviso($posto){
            include('../controllers/pdo.php');
            if(sizeof($_POST)>1){
                $query = "UPDATE avisos
                            SET titulo_msg = '".$_POST['titulo']."', texto_msg = '".$_POST['texto']."'
                        WHERE cod_agenda= '".$_GET['id']."';";
            
                $stmt = $pdo->query($query);
            
                echo '<script language="javascript">';
                echo 'alert("editado com sucesso")';
                echo '</script>';
                header("location: ../paginas/listaRemedios.php?posto=$posto");
            }
    
        }

        function deletarAviso($posto){

            include '../controllers/pdo.php'; 
      
            $posto = $_SESSION['posto'];
            $query = "DELETE FROM avisos WHERE cod_agenda='".$_GET['id']."'";
        
            $stmt = $pdo->query($query);
        
            header("Location: ../paginas/listaRemedios.php?posto=$posto");    
    
        }
    }
    $obj_msg = new Aviso();
    ?>