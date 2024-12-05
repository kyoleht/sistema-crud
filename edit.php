<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php

include_once 'db_connect.php';

$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM clientes WHERE id = $id";

$dados = mysqli_query($conn, $sql);
$linha = mysqli_fetch_assoc($dados);

?>

<body>
    <div class="container">
        <h1>Cadastro</h1>
        <form action="insertC.php" method="POST">
            <h2 class="title-cadastro">Cadastro de Clientes</h2>
            <form method="POST" class="form-cadastro">
                <div class="form-group">
                    <label for="nome">Nome: </label>
                    <input type="text" id="nome" name="nome" placeholder="Insira seu Nome" required value="<?php echo $linha['nome']; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" id="email" name="email" placeholder="Insira seu Email" required value="<?php echo $linha['email']; ?>">
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade: </label>
                    <input type="text" id="cidade" name="cidade" placeholder="Insira sua Cidade" required value="<?php echo $linha['cidade']; ?>">
                </div>

                <div class="form-group mb-3">
                    <input type="submit" value="Salvar Alterações">
                    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                </div>
            </form>
            <a href="index.php"><button class="btn">Início</button></a>
    </div>
</body>

</html>