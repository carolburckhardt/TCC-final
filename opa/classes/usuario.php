<?php
    
    class User{

        function cadastrarUsuario(){

            include('../controllers/pdo.php');

            if(sizeof($_POST)>1){
                if($_POST['senha'] == $_POST['confirmarSenha']){
                    
                if($_POST['telefone']=="")	{
                        $error[] = "Insira um telefone.";	
                }

                        $id = 1;
                        $query = "INSERT INTO user (pSecreta,rSecreta,tel, dt_nasc, nome, cpf, email, cep, senha, confir_senha, rua, numero, bairro ,id_tipuser)
                                VALUES ( '".$_POST['pSecreta']."','".$_POST['rSecreta']."','".$_POST['telefone']."', '".$_POST['dataNascimento']."', '".$_POST['nome']."', ".$_POST['cpf'].", '".$_POST['email']."', '".$_POST['cep']."', '".$_POST['senha']."',  '".$_POST['confirmarSenha']."', '".$_POST['rua']."', '".$_POST['numero']."', '". $_POST['bairro']."','".$id."');";
                        $stmt = $pdo->query($query);
                        echo '<script language="javascript">';
                        echo 'alert("usuário cadastrado com sucesso")';
                        echo '</script>';
                        header("location: inicio.php");

                    }
                    

                }
            }
        function login(){

            include('../controllers/pdo.php');
            if(sizeof($_POST)>1){
                $stmt = $pdo->query("SELECT email FROM user WHERE email='".$_POST['email']."' and senha='".$_POST['password']."'");
                while($row = $stmt->fetch()){
                    if($_POST['password'] == $row['senha']){
                        if(!empty($row['email']) and sizeof($stmt->fetch())>0){
                            $_SESSION["email"] = $_POST['email'];
                            $_SESSION["senha"] = $_POST['password'];
                            header('Location: paginas/home.php');
                        }
                    }
                    else{
                        echo '<script language="javascript">';
                        echo 'alert("senha incorreta")';
                        echo '</script>';
                    }   
            }
        }    
    }
            
        function checarLogin(){
            include('../controllers/pdo.php');

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
        
            if(empty($_SESSION["email"]) and empty($_SESSION["password"])){
                header('Location: /paginas/inicio.php');
            }
        } 

        function coletarDados(){
            include '../controllers/pdo.php'; 
            $query = "SELECT * FROM user WHERE email='".$_SESSION['email']."';"; 
            $stmt = $pdo->query($query);
            $usuario = $stmt->fetch();
            return $usuario;
    
        }

        function deletarUsuario(){

            include '../controllers/pdo.php'; 
            if(isset($_GET['deletar'])){
                $query = "DELETE FROM user WHERE email='".$_SESSION['email']."'";
            
                $stmt = $pdo->query($query);
            
                echo '<script language="javascript">';
                echo 'alert("usuário deletado com sucesso")';
                echo '</script>';
            
                header('Location: ../index.php');    
            }
        }
    
        function editarUsuario($senha){ 
            include '../controllers/pdo.php';
            if(sizeof($_POST)>1){
                if($_POST['novaSenha'] == ''){
                $query = "UPDATE user
                            SET tel = '".$_POST['telefone']."', nome = '".$_POST['nome']."', email = '".$_POST['email']."', dt_nasc = '".$_POST['dataNascimento']."', cep = '".$_POST['cep']."', bairro = '".$_POST['bairro']."', rua = '".$_POST['rua']."', numero = '".$_POST['numero']."'
                        WHERE email='".$_SESSION['email']."';";
            
                $stmt = $pdo->query($query);
            
                echo '<script language="javascript">';
                echo 'alert("usuário editado com sucesso")';
                echo '</script>';
                header("location: ../paginas/home.php");
                }
                else{
                    if($_POST['senha'] == $senha){
                        $query = "UPDATE user
                        SET tel = '".$_POST['telefone']."', nome = '".$_POST['nome']."', email = '".$_POST['email']."', dt_nasc = '".$_POST['dataNascimento']."', cep = '".$_POST['cep']."', bairro = '".$_POST['bairro']."', rua = '".$_POST['rua']."', numero = '".$_POST['numero']."', senha = '".$_POST['novaSenha']."'
                        WHERE email='".$_SESSION['email']."';";
        
                        $stmt = $pdo->query($query);
                        

                        echo '<script language="javascript">';
                        echo 'alert("usuário editado com sucesso")';
                        echo '</script>';
                        header("location: ../paginas/home.php");        
                }

            }
            }
        }

        function acharBairro(){
            
            include '../controllers/pdo.php';
            $usuario = $this->coletarDados();
            $query = "SELECT * FROM bairros WHERE nome_bairro='".$usuario['bairro']."';"; 
            $stmt = $pdo->query($query);
            $bairro = $stmt->fetch();
            return $bairro;
            }
        }

    
    $obj_usuario = new User();
    ?>