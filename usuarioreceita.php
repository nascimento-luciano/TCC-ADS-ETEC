*<?php
//session_start();
//if (!isset($_SESSION['usuario'])) {
//    header("Location: login.php");
//    exit();
//}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Receitas de Bolo</title>
</head>
<body>
    <h1>Cadastro de Receitas de Bolo</h1>
    <form action="cadastrar.php" method="post">
        <label for="nome">Nome da Receita:</label>
        <input type="text" name="nome" id="nome" required><br><br>
        <label for="ingredientes">Ingredientes:</label>
        <textarea name="ingredientes" id="ingredientes" rows="5" cols="30" required></textarea><br><br>
        <label for="modo_preparo">Modo de Preparo:</label>
        <textarea name="modo_preparo" id="modo_preparo" rows="5" cols="30" required></textarea><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>