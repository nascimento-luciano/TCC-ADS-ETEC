<?php
session_start();
include('conexao.php');

$id = $mysqli->real_escape_string($_GET['id']);

$sql_code = "SELECT * FROM receitas WHERE id = '$id'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
$row = $sql_query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['nome']; ?></title>
</head>
<body>
    <h1><?php echo $row['nome']; ?></h1>
    <p>Por: <?php echo $row['usuario']; ?></p>
    <p>Ingredientes: <?php echo $row['ingredientes']; ?></p>
    <p>Modo de Preparo: <?php echo $row['modo_preparo']; ?></p>
    <p><a href="index.php">Voltar para a lista de receitas</a></p>
</body>
</html>