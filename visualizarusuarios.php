<?php

include 'includes/header.php';
include 'includes/scripts.php';

session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "usbw";
$dbname = "pratocompartilha";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} else {
    $result = $conn->query("SELECT * FROM usuarios");

    // Verifica se a consulta foi bem-sucedida
    if (!$result) {
        die('Error in query: ' . $conn->error);
    }
}

$conn->close(); // Feche a conexão após obter o resultado da consulta
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Usuários Cadastrados</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #FFFAEF; 
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 0 auto;
    border: 2px solid #ddd; 
    border-radius: 10px; 
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
}

th, td {
    padding: 15px;
    text-align: center; 
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #FFA500; 
    color: white;
}

.button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 20px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: orangered;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px #999;
    margin: 10px 0;
}

.button:hover {background-color: #B22222}

.button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
}

.user-bold {
    font-weight: bold; 
}

</style>
</head>
<body>

<h1 style="text-align: center; font-weight: bold;">USUÁRIOS CADASTRADOS</h1>


<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Excluir</th>
    </tr>
    <?php
    // Verifica se $result é válido antes de percorrer os resultados
    if (isset($result) && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td class="user-bold"><?php echo $row['email']; ?></td> <!-- Adiciona a classe para negrito -->
                <!-- Adicione mais células conforme necessário -->
                <td>
                    <form action="deleteuser.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endwhile;
    } else {
        echo "<tr><td colspan='3'>Nenhum usuário encontrado.</td></tr>";
    }
    ?>
</table>

<!-- Exiba a mensagem de sucesso e o botão Voltar -->
<a href="painel.php" class="button">Voltar ao Painel</a>

</body>
</html>
