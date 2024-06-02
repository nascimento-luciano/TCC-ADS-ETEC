<?php
session_start();

// Verifique se o usuário está logado como administrador
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    // Se não estiver logado como administrador, redirecione para a página de login
    header("Location: painel.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Painel de Administração</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .admin-panel {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .admin-panel a {
            display: block;
            margin-bottom: 10px;
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <h1>Painel de Administração</h1>
        <p>Bem-vindo, administrador!</p>
        <a href='adicionarreceita.php'>Adicionar nova receita</a>
        <a href='editarreceita.php'>Editar receita existente</a>
        <a href='excluirreceita.php'>Excluir receita</a>
        <a href='visualizar_usuarios.php'>Visualizar todos os usuários</a>
        <a href='logout.php'>Sair</a>
    </div>
</body>
</html>