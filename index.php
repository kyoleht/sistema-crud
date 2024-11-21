<?php include_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cadastros</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <h2>Lista de Clientes</h2>
        <table class="tabela">
            <thead>
                <th>Nome</th>
                <th>Email</th>
                <th>Cidade</th>
            </thead>

            <tbody>

                <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($conn, $sql);
                while ($dados = mysqli_fetch_array($resultado)) {
                ?>
                    <tr>

                        <td><?php echo $dados['nome'] ?></td>
                        <td><?php echo $dados['email'] ?></td>
                        <td><?php echo $dados['cidade'] ?></td>
                        <td>
                            <span class="icons">
                                <button class="icon-button edit" title="Editar">
                                    <i><img src="./img/icons8-edit-30.png" alt=""></i>
                                </button>
                                <button class="icon-button delete" title="Deletar">
                                    <i><img src="./img/icons8-delete-30.png" alt=""></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="./insertC.php"><button class="btn">Adicionar Cliente</button></a>
    </div>
</body>

</html>