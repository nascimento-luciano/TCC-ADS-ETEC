<?php
include 'includes/scripts.php';
include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Receita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .divLeft,
        .divRight,
        .receita {
            flex: 1;
        }

        .divLeft,
        .divRight {
            min-height: 50vh;
            background-size: contain;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            background-repeat: no-repeat;
            background-color: #FFFAEF;
        }

        .divLeft {
            background-image: url('images/2.png');
        }

        .divRight {
            background-image: url('images/1.png');
        }

        .receita {
            margin: 20px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 1500px;
            margin: 0 auto;
        }

        .receita h2 {
            color: #333;
        }

        .receita p {
            color: #666;
            line-height: 1.6;
        }

        /* Adicione uma consulta de mídia para ajustar o layout em telas menores */
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .divLeft,
            .divRight {
                min-height: 30vh;
            }

            .receita {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="divLeft"></div>

        <div class="receita">
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

            $mysqli->set_charset("utf8");

            // Obter o ID da receita da URL
            $receitaId = $_GET['id'];

            // Consultar a receita no banco de dados
            $sql = "SELECT nomereceita, descricao, ingredientes, instrucoes FROM receitas WHERE id = $receitaId";
            $result = $mysqli->query($sql);

            // Exibir detalhes da receita
            echo "<div class='receita' style='text-align: justify;'>";
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nomeReceita = $row["nomereceita"];
                $descricaoReceita = $row["descricao"];
                $ingredientesReceita = $row["ingredientes"];
                $instrucoesReceita = $row["instrucoes"];

                echo "<strong style='color: black; display: inline-block; padding: 5px 10px; margin: 0 5px; border-radius: 5px; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);'>RECEITA</strong>";
                echo "<h2 style='text-align: justify; background-color: #d2691e; color: white; padding: 10px; border-radius: 15px; text-align: center; font-weight: bold;'>$nomeReceita</h2>";
                echo "<div style='text-align: center;'>";
                echo "<strong style='color: black; display: inline-block; padding: 5px 10px; margin: 0 5px; border-radius: 5px; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);'>DESCRIÇÃO</strong>";
                echo "</div>";
                echo "<p style='text-align: center; font-weight: bold;'>$descricaoReceita</p>";
                echo "<strong style='color: black; display: inline-block; padding: 5px 10px; margin: 0 5px; border-radius: 5px; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);'>INGREDIENTES</strong>";
                echo "<p style='text-align: justify; background-color: #f2f2f2; padding: 10px; border-radius: 10px;'>$ingredientesReceita</p>";
                echo "<strong style='color: black; display: inline-block; padding: 5px 10px; margin: 0 5px; border-radius: 5px; background-color: #fff; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);'>INSTRUÇÕES</strong>";
                echo "<p style='text-align: justify; background-color: #f2f2f2; padding: 10px; border-radius: 10px;'>$instrucoesReceita</p>";

                echo "<div style='text-align: center; margin-top: 20px;'>";
                echo "<strong style='color: black; display: block; margin-bottom: 10px; font-size: 18px;'>COMENTÁRIOS</strong>";
                echo "<textarea placeholder='Deixe seu comentário...' rows='4' cols='50'></textarea>";
                echo "<br>"; // Adicionei uma quebra de linha para separar o botão da caixa de comentários
                echo "<button style='padding: 10px 20px; color: white; background-color: #808080; text-decoration: none; border-radius: 4px;'>Enviar</button>";
                echo "</div>";

                echo "<a href='lista.php' style='display: inline-block; padding: 10px 20px; color: white; background-color: #808080; text-decoration: none; border-radius: 4px;'>Voltar</a>";
            } else {
                echo "Receita não encontrada.";
            }
            echo "</div>";

            // Fechar a conexão
            $mysqli->close();
            ?>
        </div>

        <div class="divRight"></div>
    </div>

</body>

</html>