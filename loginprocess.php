<?php

//require_once "adicionarreceita.php";

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
    $email = $_POST["email"];
    $password = $_POST["senha"];

    $stmt = $conn->prepare("SELECT id, email, password FROM usuario WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $email, $hashed_password);

    if ($stmt->fetch() && password_verify($senha, $hashed_password)) {
        $_SESSION['usuario'] = $id;
        $_SESSION['email'] = $email;
        header("location: cadastroreceita.php");
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }
}

?>
