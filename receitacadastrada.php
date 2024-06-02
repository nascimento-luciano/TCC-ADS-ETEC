<?php
include 'includes/header.php';
include 'includes/scripts.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receita Cadastrada com Sucesso</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1>Receita Cadastrada com Sucesso</h1>
        <p>Sua receita foi cadastrada com sucesso!</p>
        <a href="adicionarreceita.php">Cadastrar Nova Receita</a>
    </body>
</html>

<?php
if ($stmt->execute()) {
    header("Location: receitacadastrada.php");
} else {
    echo "Erro ao cadastrar a receita.";
}
?>