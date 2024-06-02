
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prato Compartilha</title>
</head>
<body>
    <h1>Logado</h1>
    <link rel="stylesheet" href="estilo.css">

    <!-- Formulário para fazer logout -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="logout" value="logout">

        <?php 
        // Verifica se o botão de logout foi pressionado
        if (isset($_POST["logout"])) {
            // Chama a função de logout
            logout();
        }
        ?>

    </form>

</body>
</html>


<?php
    // Inicia uma sessão
    session_start();

    // Inclui o arquivo de configuração do banco de dados
    require_once "config.php";

    // Define uma função para fazer logout
    function logout()
    {
        // Remove todas as variáveis de sessão
        session_unset();
        // Destrói a sessão
        session_destroy();
        // Redireciona o usuário para a página inicial
        header("Location: index.php");
        // Encerra o script
        exit;
    }

    // Verifica se o usuário está logado
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        // Redireciona o usuário para a página de login se não estiver logado
        header("Location: login.php");
        // Encerra o script
        exit;
    }

?>