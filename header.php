<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRATO COMPARTILHA</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Set the background image */
        body {
            background-image: url("background.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Style the header */
        header {
            background-color: #ffd7ab;
            padding: 20px;
            text-align: center;
            font-size: 36px;
            font-weight: bold;
        }

        /* Style the logo image */
        .logo {
            display: inline-block;
            margin-right: 10px;
            width: 50px;
            height: 50px;
        }

        /* Style the navigation bar */
        .w3-bar {
            background-color: #e6b68b;
            overflow: hidden;
        }

        .w3-bar a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .w3-bar a:hover {
            background-color: #ddd;
            color: black;
        }

        .w3-bar a.active {
            background-color: #4CAF50;
            color: white;
        }

        /* Style the search icon */
        .fa-search {
            margin-right: 5px;
            
            
        }
        
    </style>
</head>

<body>
    <header class="w3-container">
        <!-- <img src="logo.png" alt="Logo" class="logo"> -->
        <img src="images/loogo2.png" alt="logo" class="logo" style="width: 120px; height: 120px; border-radius: 50%; position: absolute; top: 10%; transform: translateY(-50%); left: 55px;">
        <img src="images/nome.png" alt="nome" class="nome" style="width: 450px; height: 150px;">
        <!-- <img src="header-image.jpg" alt="Header Image" style="width:100%"> -->
    </header>

    <nav class="w3-bar">
        <a href="index.php" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Home</a>
        

        
        <form action="busca.php" method="GET" class="w3-bar-item w3-right">
            <input type="text" name="busca" placeholder="Buscar receitas...">
            <button type="submit"><i class="fas fa-search"></i> Buscar</button>
        </form>

        
        <a href="contato.php" class="w3-bar-item w3-button w3-right"><i class="fas fa-info-circle"></i> Contato/Sobre
        </a>
        <a href="lista.php" class="w3-bar-item w3-button w3-right"><i class="fas fa-list"></i> Lista de Receitas</a>
        <a href="login.php" class="w3-bar-item w3-button w3-right"><i class="fas fa-plus"></i> Cadastro de Receitas</a>
        <a href="cadastrar.php" class="w3-bar-item w3-button w3-right"><i class="fas fa-user-plus"></i> Cadastro de Usuário</a>
    </nav>


</body>

</html>
