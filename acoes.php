<?php
session_start();
require 'conexao.php';

if (isset($_POST['create_usuario'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['newnome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['newemail']));
    $senha = isset($_POST['newsenha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['newsenha']), PASSWORD_DEFAULT)) : '';
    $loja = null;
    $status = null;
    $tipo = null;

    $sql = "INSERT INTO mcusuario (nome, email, senha, loja, status, tipo) VALUES ('$nome', '$email', '$senha', '$loja', '$status', '$tipo')";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usuario criado com sucesso';
        header('Location: index.php');
        exit;
    }else{
        $_SESSION['mensagem'] = 'Usuario não foi criado';
        header('Location: index.php');
        exit;
    }
}

?>