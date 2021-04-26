<?php
#CONEXÂO COM O BANCO DE DADOS

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_usuarios';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco); 

if(!$conexao){
    die ("<br><h3>Não conectou</h3>!!! Erro: " . mysqli_connect_error());

}

?>