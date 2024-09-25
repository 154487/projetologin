<?php

$usuario = 'root';
$senha = '';
$database = 'monitorchamados';
$host = 'localhost';

$conexao = mysqli_connect($host, $usuario, $senha, $database);
#$mysqli = new mysqli($host, $usuario, $senha, $database);

if($conexao->error){
    die("falha fatal: " .$conexao->error);
}

?>