<?php include_once 'php_action/create.php'; ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h2 class="title-cadastro">Cadastro de Clientes</h2>
        <form method="POST" class="form-cadastro">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" placeholder="Insira seu Nome" required>
            </div>

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" placeholder="Insira seu Email" required>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade: </label>
                <input type="text" id="cidade" name="cidade" placeholder="Insira sua Cidade" required>
            </div>

            <button type="submit" class="btn" name="cadastrar">Cadastrar Cliente</button>
            
            <a class="botao-listar" href="index.php">Listar Clientes</a>
        </form>
    </div>
</body>
</html>