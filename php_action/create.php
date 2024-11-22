<?php 

include_once 'db_connect.php';

if(isset($_POST['cadastrar'])) {
    $nome = mysqli_escape_string($connect, $POST['nome']);
    $email = mysqli_escape_string($connect, $POST['email']);
    $cidade = mysqli_escape_string($connect, $POST['cidade']);

    $sql = "INSERT INTO cadastro_clientes (nome, email, cidade) values ('$nome', '$email', '$cidade')";
}

?>