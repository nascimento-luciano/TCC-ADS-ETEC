<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buscar</title>
</head>
<body>

  <form action="busca.php" method="get">
    <input type="text" name="query" placeholder="Search for recipes...">
    <input type="submit" value="Search">
  </form>

  <?php
  // Conecte-se ao banco de dados
  $host = "localhost";
  $usuario = "root";
  $senha = "usbw";
  $database = "pratocompartilha";

  $mysqli = new mysqli($host, $usuario, $senha, $database);

  // Verifique a conexão
  if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
  }

  // Capture and sanitize the search query
  $query = isset($_GET['query']) ? $_GET['query'] : '';
  $query = $mysqli->real_escape_string($query);

  // Search the database
  $sql = "SELECT * FROM receitas WHERE nomereceita LIKE '%$query%' OR descricao LIKE '%$query%' OR ingredientes LIKE '%$query%'";
  $result = $mysqli->query($sql);

  // Display the search results
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<a href='" . $row["link"] . "'>" . $row["link"]. "</a><br>";
      }
  } else {
      echo "No results found";
  }

  // Feche a conexão com o banco de dados
  $mysqli->close();
  ?>

</body>
</html>