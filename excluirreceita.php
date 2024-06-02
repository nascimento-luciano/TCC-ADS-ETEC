<?php
include 'includes/header.php';
include 'includes/scripts.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Excluir Receita</title>
    <style>
        body {
            text-align: center;
        }

        .delete-button {
            padding: 10px 20px;
            color: white;
            background-color: #FF0000;
            /* vermelho */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px 0;
        }

        .delete-button:hover {
            background-color: #B22222;
            /* vermelho escuro */
        }
    </style>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f0f0f0;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
            width: 500px;
            text-align: center;
        }

        .welcome {
            font-size: 24px;
            color: #333;
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
            color: #fff;
            background-color: #45a049;
            border: none;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            border-radius: 4px;
            /* Add rounded corners */
            margin-top: 5px;
        }

        .link:hover {
            background-color: #004d99;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: orangered;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            /* remove underline from link */
            margin-bottom: 10px;
        }

        .back-button:hover {
            background-color: #B22222;
            /* dark green */
        }
    </style>

</head>

<body>
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <h1>Excluir Receita</h1>

    <form method="POST" action="excluirreceita.php">
        <label for="id"><b>ID da Receita:</b></label>
        <input type="number" id="id" name="id" required>
        <input type="submit" value="Excluir" class="delete-button">
    </form>
</body>

</html>


<?php
// Conectar ao banco de dados
$host = "localhost";
$usuario = "root";
$senha = "usbw";
$database = "pratocompartilha";

$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verificar a conexão
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    // Verificar se a receita existe
    $sql = "SELECT * FROM receitas WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // A receita existe, então podemos excluí-la
        $sql = "DELETE FROM receitas WHERE id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        echo "Receita excluída com sucesso!";
    } else {
        // A receita não existe
        echo "Não foi possível excluir a receita. A receita com o ID fornecido não existe.";
    }
} else {
    echo "<br>Nenhuma receita excluída.";
}
echo "<br><br><br><a href='painel.php' class='back-button'>Voltar ao Painel</a>";

?>