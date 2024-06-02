<?php
session_start();
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Primeiro, verifique a tabela de usuários
    $sql = "SELECT id, email, senha FROM usuarios WHERE email = ?";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email = $email;
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1){                    
                mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($senha, $hashed_password)){
                        session_start();
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["email"] = $email; 
                        header("location: adicionarreceita.php"); // Redirect to user page
                    } else {
                        $password_err = "The password you entered was not valid.";
                    }
                }
            } else {
                // Se não for encontrado na tabela de usuários, verifique a tabela de administradores
                $sql = "SELECT id, email, senha FROM administradores WHERE email = ?";
                if($stmt = mysqli_prepare($link, $sql)){
                    mysqli_stmt_bind_param($stmt, "s", $param_email);
                    $param_email = $email;
                    if(mysqli_stmt_execute($stmt)){
                        mysqli_stmt_store_result($stmt);
                        if(mysqli_stmt_num_rows($stmt) == 1){                    
                            mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                            if(mysqli_stmt_fetch($stmt)){
                                if(password_verify($senha, $hashed_password)){
                                    session_start();
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["id"] = $id;
                                    $_SESSION["email"] = $email; 
                                    header("location: painel.php"); // Redirect to admin page
                                } else {
                                    $password_err = "The password you entered was not valid.";
                                }
                            }
                        } else {
                            $username_err = "No account found with that username.";
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                }
            }
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($link);
?>
