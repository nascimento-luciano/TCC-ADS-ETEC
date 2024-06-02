<?php
include 'includes/header.php';
include 'includes/scripts.php';
?>
<?php
session_start(); // Start the session at the beginning

// Conectar ao banco de dados
$host = "localhost";
$usuario = "root";
$senha = "usbw";
$database = "pratocompartilha";

$mysqli = new mysqli($host, $usuario, $senha, $database);

$mysqli->set_charset("utf8");

// Fetch the existing recipe data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM receitas WHERE id=$id");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
}

// Update the recipe data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nomereceita = $_POST["nomereceita"];
    $descricao = $_POST["descricao"];
    $ingredientes = $_POST["ingredientes"];
    $instrucoes = $_POST["instrucoes"];

    // Prepare an UPDATE statement
    $sql = "UPDATE receitas SET nomereceita=?, descricao=?, ingredientes=?, instrucoes=? WHERE id=?";

    if ($stmt = $mysqli->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ssssi", $nomereceita, $descricao, $ingredientes, $instrucoes, $id);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Records updated successfully. Store success message
            $message = "Receita atualizada com sucesso.";
        } else {
            echo "Erro ao atualizar a receita.";
        }

        // Close statement
        $stmt->close();
    }
}

// Close connection
$mysqli->close();
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
        }
        .link {
            display: inline-block;
            width: 200px; /* Define a largura */
            height: 50px; /* Define a altura */
            line-height: 50px; /* Centraliza o texto verticalmente */
            margin-bottom: 10px;
            padding: 0 20px;
            color: #fff;
            background-color: #0066cc;
            border: none;
            border-radius: 25px; /* Adiciona cantos arredondados */
            text-decoration: none;
            text-align: center;
            cursor: pointer;
        }
        .link:hover {
            background-color: #004d99;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #45a049; /* green */
            border: none;
            border-radius: 4px;
            text-decoration: none; /* remove underline from link */
            margin-bottom: 10px;
        }

        .back-button:hover {
            background-color: #004d99; /* dark green */
        }
    </style>
</head>
<body>

<div class="welcome"><b>Editar Receita </b><?php echo $_SESSION['usuario']; ?></div>

<form method="POST" action="editarreceita.php">
    <label for="id">ID da Receita:</label>
    <input type="text" name="id" value="<?php echo $row['id']; ?>">
    <label for="nomereceita">Nome da Receita:</label>
    <input type="text" id="nomereceita" name="nomereceita" value="<?php echo $row['nomereceita']; ?>" required>
    <label for="nomereceita">Descrição da Receita:</label>
    <input type="text" id="descricao" name="descricao" value="<?php echo $row['descricao']; ?>" required>
    <label for="nomereceita">Ingredientes da Receita:</label>
    <input type="text" id="ingredientes" name="ingredientes" value="<?php echo $row['ingredientes']; ?>" required>
    <label for="nomereceita">Instruções da Receita:</label>
    <input type="text" id="instrucoes" name="instrucoes" value="<?php echo $row['instrucoes']; ?>" required>
   
    <!-- Rest of the form fields -->
    <input type="submit" value="Atualizar Receita">
</form>

<!-- Display the success message and the back button -->
<?php if (isset($message)): ?>
    <p><?php echo $message; ?></p>
    <a href='painel.php' class='back-button'>Voltar ao Painel</a>
<?php endif; ?>

<!-- Rest of the HTML code -->
</body>
</html>