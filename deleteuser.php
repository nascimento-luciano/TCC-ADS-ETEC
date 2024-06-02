<?php
session_start();

$host = "localhost";
$dbusername = "root";
$dbpassword = "usbw";
$dbname = "pratocompartilha";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
}

// Certifique-se de que o ID do usuário foi enviado
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepare a declaração SQL
    if ($stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?")) {
        // Vincule o ID do usuário à declaração preparada
        $stmt->bind_param("i", $id);

        // Execute a declaração preparada
        $stmt->execute();

        // Feche a declaração preparada
        $stmt->close();
    }
}

// Feche a conexão com o banco de dados
$conn->close();

// Redirecione de volta para a página de usuários
header("Location: visualizarusuarios.php");
?>

