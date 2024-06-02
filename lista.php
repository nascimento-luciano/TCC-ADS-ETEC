<?php
include 'includes/scripts.php';
include 'includes/header.php';
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #FFFAEF;
        }

        h1 {
            background-color: #f0f0f0;
            color: orange;
            font-weight: bold;
            padding: 10px;
            text-align: center;
            position: relative;
        }

        h1::before {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: orange;
            bottom: 0;
            left: 0;
        }

        i {
            margin-right: 25px;
        }

        #lista-receitas {
            background-color: #f0f0f0;
            border-radius: 10px;
            margin: 10px auto;
            padding: 20px;
            width: 50%;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            position: relative;
            background-color: #f0f0f0;
            border-radius: 10px;
            margin: 10px 0;
            padding: 10px;
            text-align: center;
            transition: background-color 0.3s;
        }

        li:hover {
            background-color: #e0e0e0;
        }

        li a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
            display: block;
            text-align: left;
            padding-left: 10px;
        }

        li span {
            position: absolute;
            top: 5px;
            right: 5px;
            font-weight: bold;
            color: #555;
        }

        li:hover a {
            background-color: #e0e0e0;
            color: orange;
            background-size: calc(100% - 20px) 100%;
            padding: 10px;
        }
    </style>
</head>

<body>

    <div id="lista-receitas">
        <?php
        // Conectar ao banco de dados
        $host = "localhost";
        $usuario = "root";
        $senha = "usbw";
        $database = "pratocompartilha";

        $mysqli = new mysqli($host, $usuario, $senha, $database);

        // Verificar a conexão
        if ($mysqli->connect_error) {
            die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
        }

        // Definir o conjunto de caracteres para UTF-8
        $mysqli->set_charset("utf8");

        // Consultar as receitas no banco de dados
        $sql = "SELECT id, nomereceita FROM receitas";
        $result = $mysqli->query($sql);

        // Exibir links para as receitas
        if ($result->num_rows > 0) {
            echo "<h1><i class='fas fa-utensils'></i>Lista de Receitas</h1>";
            echo "<ol>";
            while ($row = $result->fetch_assoc()) {
                $receitaId = $row["id"];
                $nomeReceita = $row["nomereceita"];
                echo "<li><a href='receitas.php?id=$receitaId'>$nomeReceita</a></li>";
            }
            echo "</ol>";
        } else {
            echo "Nenhuma receita encontrada.";
        }

        // Fechar a conexão
        $mysqli->close();
        ?>
    </div>

    <?php
    include 'includes/footer.php';
    ?>

</body>

</html>