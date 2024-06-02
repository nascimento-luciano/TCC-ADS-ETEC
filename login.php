<?php

include 'includes/header.php';
include 'includes/scripts.php';

session_start();

// Verificar se o usuário está logado
//if(!isset($_SESSION['login_user'])){
  // Se não estiver logado, redirecionar para a página de login
  //header("location: login.php");
  //exit;
//}

$host = "localhost";
$dbusername = "root";
$dbpassword = "usbw";
$dbname = "pratocompartilha";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}
else{
  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result1 = $conn->query("SELECT * FROM administradores WHERE email='$email' AND senha='$senha'");
    $result2 = $conn->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'");

    if($result1->num_rows > 0){
      $_SESSION['login_user'] = $email; 
      header("location: painel.php"); 
    }
    else if($result2->num_rows > 0){
      $_SESSION['login_user'] = $email; 
      header("location: adicionarreceita.php"); 
    }
    else{
      echo "Email ou senha inválidos.";
    }
  }
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<h1>Faça o login</h1>
<form action="" method="POST">
    <p>
        <label>E-mail </label>
        <input type="text" name="email">
    </p>
    <p>
        <label>Senha </label>
        <input type="password" name="senha">
    </p>
    <p>
        <input type="submit" name="login" value="Entrar">
    </p>
</form>
<br>
<a href="cadastrar.php">Ainda não é cadastrado?</a>
</body>
</html>

<?php
  include 'includes/footer.php';
  ?>