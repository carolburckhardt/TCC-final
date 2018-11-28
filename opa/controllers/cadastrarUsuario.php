<?php    
    include('../classes/usuario.php');
    if(isset($_POST)){
        $obj_usuario -> cadastrarUsuario();

    }
    
?>