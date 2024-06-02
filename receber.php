<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber Dados</title>
</head>
<body>

<?php
$mysqli =mysqli_conect("localhost","root","pratocompartilha");

//Chegar Conexão
if(!$mysqli){
echo "Não conectado";
}
echo"Conectado ao Banco";

//Recuperar e verificar já existente

$usuario = $_POST['usuario'];
$usuario = mysqli_real_escape_string($mysqli, $usuario);

$sql = "SELECT usuario FROM pratocompartilha WHERE usuario = '$usuario'";
$retorno =mysqli_query($mysqli, $sql);

if(mysqli_num_rows($retorno)>0){

echo"Usuario já cadastrado!<br>";
echo"<a href='cadastro.html'>Voltar</a>";

}

else{

    $usuario= $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO pratocompartilha (usuario, email, senha) values('$usuario', '$email', '$senha')";
    $resultado = mysqli_query($mysqli, $sql);
    echo">>Usuário cadastrado com sucesso! <br>";
    echo"<a href='cadastro.html'>Voltar</a>";
    

}


?>

</body>
</html>

