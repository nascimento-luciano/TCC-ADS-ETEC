<?php
require_once 'config.php';

// Cria a conexão
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verifica a conexão
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Pega o ID da receita da URL
$id = $_GET['id'];

// Prepara a consulta SQL
$stmt = $mysqli->prepare("SELECT * FROM receitas WHERE id = ?");

// Vincula o ID da receita à consulta
$stmt->bind_param("i", $id);

// Executa a consulta
$stmt->execute();

// Obtém o resultado da consulta
$result = $stmt->get_result();

// Obtém a receita
$receita = $result->fetch_assoc();

$stmt->close();
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $receita['nomereceita'] ?></title>
    <!-- Adicione aqui o seu CSS -->
</head>
<body>
    <h1><?= $receita['nomereceita'] ?></h1>
    <p>Ingredientes: <?= $receita['ingredientes'] ?></p>
    <p>Instruções: <?= $receita['instrucoes'] ?></p>
    <p>Descrição: <?= $receita['descricao'] ?></p>
</body>
</html>