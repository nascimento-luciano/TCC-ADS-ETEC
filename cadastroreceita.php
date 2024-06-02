<?php
session_start();
//Substitua com suas credenciais de banco de dados
//$host = "localhost";
//$usuario = "root";
//$senha = "usbw";
//$database = "pratocompartilha";

require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os valores dos campos do formulário
    $nomereceita = $_POST["nomereceita"];
    $ingredientes = $_POST["ingredientes"];
    $instrucoes = $_POST["instrucoes"];
    $descricao = $_POST["descricao"];
    $idusuario = $_POST["idusuario"];

    // Prepara a consulta SQL
    $stmt = $mysqli->prepare("INSERT INTO receitas (nomereceita, ingredientes, instrucoes, descricao, idusuario) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $nomereceita, $ingredientes, $instrucoes, $descricao, $idusuario);

    // Verifica se a consulta foi preparada corretamente
    if ($stmt === false) {
        die("Erro ao preparar a consulta: " . $mysqli->error);
    }

    // Executar a consulta SQL
    if ($stmt->execute()) {
      // Cadastro bem-sucedido
      header("Location: receitacadastrada.php");
      exit();
  } else {
      // Erro no cadastro
      $erro = "Erro ao cadastrar usuário: " . $mysqli->error;
  }
  echo "($nomereceita, $ingredientes, $instrucoes, $descricao, $idusuario)";


  // Fechar a consulta preparada
  $stmt->close();
}

// Fechar a conexão com o banco de dados
$mysqli->close();
?>