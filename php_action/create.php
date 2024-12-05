<?php 

include_once 'php_action/db_connect.php';

if(isset($_POST['cadastrar'])) {
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $cidade = mysqli_escape_string($conn, $_POST['cidade']);

    $sql = "INSERT INTO clientes (nome, email, cidade) VALUES ('$nome', '$email', '$cidade')";

    if(mysqli_query($conn, $sql)) {
        echo "Usuário Cadastrado com Sucesso!";
        header('Location: ./index.php');
    } else {
        echo "Erro ao Cadastrar o Usuário.";
        header('Location: ./index.php');
    }
}

?>