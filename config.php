
<?php

//session_start();

// Inclui o arquivo de configuração
//require_once 'config.php';

// Verifica se o formulário foi enviado
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
//    $email = $_POST["email"];
//    $senha = $_POST["senha"];

    // Preparar a consulta SQL
//    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");
//    $stmt->bind_param("s", $email);

    // Executar a consulta SQL
//    $stmt->execute();
//    $resultado = $stmt->get_result();

    // Verificar se o usuário existe e a senha está correta
//    if ($resultado->num_rows == 1) {
//        $linha = $resultado->fetch_assoc();
//        if (password_verify($senha, $linha["senha"])) {
            // Login bem-sucedido
//            $_SESSION["email"] = $linha["email"];
//            header("Location: index.php");
//            exit();
//        } else {
            // Senha incorreta
//            $erro = "Senha incorreta";
//        }
//    } else {
        // Usuário não encontrado
//        $erro = "Usuário não encontrado";
//    }

    // Fechar a consulta preparada
//    $stmt->close();
//}

// Fechar a conexão com o banco de dados
//$mysqli->close();

//------------------------------------------------------------//



// Configurações de conexão com o banco de dados
$host = "localhost"; // Nome do servidor do banco de dados
$usuario = "root"; // Nome de usuário do banco de dados
$senha = "usbw";   // Senha do banco de dados
$database = "pratocompartilha";   // Nome do banco de dados

// Conexão com o banco de dados usando a extensão MySQLi
$mysqli = new mysqli($host, $usuario, $senha, $database);

// Verifica se ocorreu algum erro na conexão
if ($mysqli->connect_error) {
    die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}

// Definir o conjunto de caracteres para a conexão (opcional)
$mysqli->set_charset("utf8");
?>
