<!DOCTYPE html>
<html>
<head>
    <title>Receita Cadastrada</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            text-align: center;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
        }
        
        .back-button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50; /* Change the background color */
            color: white; /* Change the text color */
            border: none; /* Remove the border */
            border-radius: 4px; /* Add rounded corners */
            cursor: pointer; /* Change the cursor when hovering over the button */
            text-decoration: none; /* Remove underline from text */
            display: inline-block; /* Required for buttons to take on padding and width properties */
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Falha!</h1>
        <p>Sua receita não foi cadastrada!</p>
        <button onclick="history.back()" class="back-button">Voltar</button>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>