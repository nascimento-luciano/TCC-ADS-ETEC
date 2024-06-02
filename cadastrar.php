<?php
include 'includes/header.php';
include 'includes/scripts.php';
?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar usuário</title>

</head>

<body>
    <h1>Cadastrar Usuário</h1>
    <link rel="stylesheet" href="estilo.css" type="text/css">
    <form action="cadastro.php" method="POST">
        <p>
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required>
            <!-- Campo de entrada para o nome do usuário -->
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <!-- Campo de entrada para o endereço de email do usuário -->
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <!-- Campo de entrada para a senha do usuário -->
        </p>
        <p>
            <label for="check-senha">Repita a Senha:</label>
            <input type="password" name="check-senha" id="check-senha" placeholder="Repita a Senha" class="input" required>
            <!-- Campo de entrada para a confirmação da senha do usuário -->
        </p>
        <p>
            <input type="submit" value="Cadastrar">
            <!-- Botão para enviar o formulário de cadastro -->
        </p>
    </form>

    <?php

    //--- Código Base----//   
    // Validate input
    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores enviados pelo formulário
    //    $usuario = $_POST["usuario"];
    //    $email = $_POST["email"];
    //    $senha = $_POST["senha"];
    //    $check_senha = $_POST["check-senha"];

    // Verifica se os campos foram preenchidos corretamente
    //    if (empty($usuario)) {
    //        echo "Por favor, preencha o campo de usuário.";
    //    } elseif (empty($email)) {
    //        echo "Por favor, preencha o campo de email.";
    //    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //        echo "Por favor, insira um endereço de email válido.";
    //    } elseif (empty($senha)) {
    //        echo "Por favor, preencha o campo de senha.";
    //    } elseif (strlen($senha) < 6) {
    //        echo "A senha deve ter pelo menos 6 caracteres.";
    //    } elseif ($senha !== $check_senha) {
    //        echo "As senhas não coincidem.";
    //    } else {
    // Input is valid, do something with it
    // Por exemplo, armazena os valores em um banco de dados
    //        echo "Cadastro realizado com sucesso!";
    //    }
    //}

    //---Testando este Código----//   
    session_start();
    $host = "localhost";
    $usuario = "root";
    $senha = "usbw";
    $database = "pratocompartilha";

    $conn = new mysqli($host, $usuario, $senha, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["usuario"];
        $password = password_hash($_POST["senha"], PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $usuario, $senha);

        if ($stmt->execute()) {
            echo "Registro de usuário bem-sucedido!";
        } else {
            echo "Erro ao registrar o usuário.";
        }
    }
    ?>

</html>

<?php
  include 'includes/footer.php';
  ?>