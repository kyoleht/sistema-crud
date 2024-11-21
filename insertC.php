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
        <form action="php_action/insertC.php" method="POST" class="form-cadastro">
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade: </label>
                <input type="text" id="cidade" name="cidade" required>
            </div>

            <button type="submit" class="btn">Cadastrar Cliente</button>
        </form>
    </div>
</body>
</html>