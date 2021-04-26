<?php
if (isset($_GET['usuario']) && $_GET['usuario'] != ''){
   $usuario = [];
      $usuario['usuario'] = $_GET['usuario'];

      if(isset($_GET['senha'])){
        $usuario['senha'] = $_GET['senha'];
    }else{
        $usuario['senha'] = '';

   if(isset($_GET['administrador'])){
       $usuario['administrador'] = $_GET['admistrador'];
   }else{
       $usuario['administrador'] = '';

   }

   }

include "conexao.php";

if(isset($usuario)){
    $sqlInserir = "INSERT INTO tb_usuarios(
        usuario,
        senha,
        administrador
        
    )VALUES(
        '{$usuario['usuario']}',
        '{$usuario['senha']}',
        '{$usuario['administrador']}'
      
    );";

          mysqli_query($conexao, $sqlInserir);
  
    }
}
include "template.php";
?>
