<?php
include 'includes/header.php';
include 'includes/scripts.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .welcome {
            font-size: 24px;
            color: #333;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            width: 500px;
            text-align: center;
        }

        .link {
            display: inline-block;
            width: 200px;
            /* Define a largura */
            height: 50px;
            /* Define a altura */
            line-height: 50px;
            /* Centraliza o texto verticalmente */
            margin-bottom: 10px;
            padding: 0 20px;
            color: white;
            background-color: orangered;
            border: none;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            border-radius: 4px;
            /* Add rounded corners */
        }

        .link:hover {
            background-color: #B22222;;
        }

        .container {
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            width: 500px;
        }

        .container p,
        .container a {
            margin: 0;
            padding: 0;
        }

        .container .link {
            margin-right: 5px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="welcome"><b>Bem Vindo ao Painel do Administrador</b><?php echo $_SESSION['usuario']; ?></div>
    <div class="container">
        <p>
            <a class="link" href="adicionarreceita.php">Adicionar Nova Receita</a>
        </p>
        <p>
            <a class="link" href="editarreceita.php">Editar Receita Existente</a>
        </p>
        <p>
            <a class="link" href="excluirreceita.php">Excluir Receita</a>
        </p>
        <p>
            <a class="link" href="visualizarusuarios.php">Visualizar Usuários</a>
        </p>
        <p>
            <a class="link" href="logout.php">Sair</a>
        </p>
    </div>
</body>

</html>
