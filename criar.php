<?php

require_once("receber.php");


$result = "";

if(filter_input(INPUT_POST, "txtusuario")){
  $usuario = new Usuario(
    null,
    filter_input(INPUT_POST, "txtnome", FILTER_SANITIZE_STRING),
    filter_input(INPUT_POST, "txtemail", FILTER_SANITIZE_EMAIL),
    filter_input(INPUT_POST, "txtsenha", FILTER_SANITIZE_STRING),

  );

  if((new UsuarioController())->create($usuario)){
    $result = "<div class='alert bg-green'>Pessoa Cadastrada</div>";
  }else{
    $result = "<div class='alert bg-red'>Erro ao cadastrar</div>";
  }
}

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="max-width">
    <div class="text-center">
      
    <!-- Adicionar uma imagem do site Prato Compartilha -->

      <a href="index.php"><img src="img/logo_white.png" alt="Prato Compartilha" id="imgLogo"></a>
    </div>
    <br><br>
    <h1>Cadastrar</h1>
    <div class="box">
      <form method="post">

        <div class="form-control">
          <label for="txtusuario">Usuario</label>
          <input type="text" name="txtusuario" id="txtusuario" placeholder="Nome de Usuario" class="input-text">
        </div>

        <div class="form-control">
          <label for="txtemail">E-mail</label>
          <input type="text" name="txtemail" id="txtemail" placeholder="E-maill principal" class="input-text">
        </div>
        

        <div class="form-control">
          <label for="txtsenha">senha</label>
          <input type="text" name="txtsenha" id="txtsenha" placeholder="E-maill principal" class="input-text">
        </div>


        <div class="form-control">
          <input type="submit" name="brnSend" value="Cadastrar" class="btn bg-green">
        </div>

        <div>
          <?=$result;?>
        </div>
      </form>
    </div>
  </div>


  <?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $usuario   = $_POST['usuario'];
    $email     = $_POST['email'];
    $senha     = $_POST['senha'];

    // Validate input
    if (empty($usuario)) {
        echo "Por favor, preencha o campo de usuário.";
    } elseif (empty($email)) {
        echo "Por favor, preencha o campo de email.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, insira um endereço de email válido.";
    } elseif (empty($senha)) {
        echo "Por favor, preencha o campo de senha.";
    } elseif (strlen($senha) < 6) {
        echo "A senha deve ter pelo menos 6 caracteres.";
    } else {

      
// A entrada é válida, faça algo com ela 
// Por exemplo, armazene-a em um banco de dados

    }

    if (isset($_POST['Cadastrar'])){

      $usuario     = $_POST['usuario'];
      $email       = $_POST['email'];
      $senha       = $_POST['senha'];
      $check_senha = $_POST['check_senha'];
  }


  //Conectar com o Banco de Dados PHPMyAdmin
  
  if($senha != $check_senha){
  
      die("As senhas não correspondem.");
  
      $usuario = 'root';
      $senha = '';
      $database = 'pratocompartilha';
      $host = 'localhost';
  
  
  
      $mysqli = new mysqli($host, $usuario, $senha, $database);
  
      if (!$mysqli_connect($host, $usuario, $senha, $database)){
  
          die("Falha ao conectar ao banco de dados: " . $mysqli->error);
  
      }
  
      $sql = "INSERT INTO usuarios (Usuário, E-mail, Senha, ) VALUES ('$usuario', '$email','$senha')";
  
      $rs = mysqli_query($mysqli, $sql);
  
      if($rs){
  
          echo "Cadastrado com sucesso!";
  
      } else {
  
          echo "Erro ao cadastrar!";
  
      }


  }
?>

</body>
</html>