<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Concluído</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Cadastro Concluído</h1>
    <p>Usuário criado com sucesso!</p>
    
    <!-- Adicione um botão "Voltar" para a página de login -->
    <a href="login.php">Voltar para o Login</a>
</body>
</html> 


<?php
session_start();
require_once 'config.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    //$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Preparar a consulta SQL
    $stmt = $mysqli->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $usuario, $email, $senha);
    
    //------Para cadastrar com senha HASH------//
    //$stmt->bind_param("sss", $usuario, $email, $senha_hash);

    // Executar a consulta SQL
    if ($stmt->execute()) {
        // Cadastro bem-sucedido
        header("Location: index.php");
        exit();
    } else {
        // Erro no cadastro
        $erro = "Erro ao cadastrar usuário: " . $mysqli->error;
    }

    // Fechar a consulta preparada
    $stmt->close();
}

// Fechar a conexão com o banco de dados
$mysqli->close();
?>