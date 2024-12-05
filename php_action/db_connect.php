<?php 

$username = 'root';
$servername = 'localhost';
$db_name = 'cadastro_clientes';
$pass = '';

$conn = mysqli_connect($servername, $username, $pass, $db_name);

if(mysqli_connect_error()) {
    echo "Não foi possível se conectar com o banco de dados " . mysqli_connect();
} 



?>