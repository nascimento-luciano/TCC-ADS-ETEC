<?php
include 'includes/scripts.php';
include 'includes/header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Receita</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc; /* Add a border */
            border-radius: 4px; /* Add rounded corners */
            box-sizing: border-box; /* Make sure padding and border are included in the total width and height */
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: orangered; /* Change the background color */
            color: white; /* Change the text color */
            border: none; /* Remove the border */
            border-radius: 4px; /* Add rounded corners */
            cursor: pointer; /* Change the cursor when hovering over the button */
        }
        input[type="submit"]:hover {
            background-color: silver; /* Change the background color when hovering over the button */
        }

        input[type="text"], textarea {
            width: 100%;
            height: 50px; /* Adjust the height */
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc; /* Add a border */
            border-radius: 4px; /* Add rounded corners */
            box-sizing: border-box; /* Make sure padding and border are included in the total width and height */
            line-height: 1.5; /* Add some space between lines of text */
        }

        input[type="text"] {
            width: 100%;
            height: 50px; /* Adjust the height */
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc; /* Add a border */
            border-radius: 4px; /* Add rounded corners */
            box-sizing: border-box; /* Make sure padding and border are included in the total width and height */
        }

        textarea {
            width: 100%;
            height: 100px; /* Adjust the height */
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc; /* Add a border */
            border-radius: 4px; /* Add rounded corners */
            box-sizing: border-box; /* Make sure padding and border are included in the total width and height */
            line-height: 1.5; /* Add some space between lines of text */
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Adicionar Receita</h1>
        <form action="cadastroreceita.php" method="post">
            <label for="title">Título:</label>
            <input type="text" id="nomereceita" name="nomereceita">
            <label for="title">Ingredientes:</label>
            <input type="text" id="ingredientes" name="ingredientes">
            <label for="title">Instruções:</label>
            <input type="text" id="instrucoes" name="instrucoes">
            <label for="title">Descrição:</label>
            <input type="text" id="descricao" name="descricao">
            <input name="idusuario" type="hidden" value="idusuario">

            <input type="submit" value="Adicionar Receita">
        </form>

        <?php
        // Assuming $_SESSION['role'] holds the user's role
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
            echo "<br><br><br><a href='painel.php' class='back-button'>Voltar ao Painel</a>";
        }
        ?>
        
    </div>
</body>
</html>
