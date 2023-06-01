<!DOCTYPE html>
<html>
<head>
  <title>Respuestas de comentarios</title>
  <style>
    body {

    
      background-image: url('img/fondo2.jpeg');
      background-repeat: no-repeat;
      background-size: cover;
      color: #FFFFFF;
      font-family: Arial, sans-serif;
    }
    
    h1 {
      color: #00D2BE;
    }
    
    table {
      border-collapse: collapse;
      margin-top: 20px;
    }
    
    th, td {
      border: 1px solid #00D2BE;
      padding: 10px;
    }
    
    th {
      background-color: #00D2BE;
      color: #FFFFFF;
    }
    
    td {
      background-color: transparent;
      color: #ffffff;
    }
    
    a {
      color: #00D2BE;
      text-decoration: none;
    }
    
    a:hover {
      text-decoration: underline;
    }
    
    input[type="text"] {
      padding: 5px;
      border: 1px solid #00D2BE;
      border-radius: 4px;
      background-color: #FFFFFF;
      color: #000000;
    }
    
    input[type="submit"] {
      padding: 10px 20px;
      background-color: #00D2BE;
      color: #FFFFFF;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #009E8C;
    }
  </style>
</head>
<body>
  <h1>Respuestas de comentarios</h1>

  <?php
  // Configuración de la conexión a la base de datos
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "spacey";

  // Crear conexión
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar conexión
  if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
  }

  // Consulta SQL para seleccionar todos los registros de la tabla
  $sql = "SELECT * FROM preguntas";
  $result = $conn->query($sql);

  echo "<table>";
  $firstRow = true;

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
  
    foreach ($row as $value) {
      echo "<td>" . $value . "</td>";
    }
  
    if (!$firstRow) {
      echo "<td><a href='php/eliminarrespuesta.php?id=" . $row["id"] . "' onclick=\"return confirm('¿Estás seguro que deseas eliminar este registro?');\"> <img src='img/eliminar.png' style='width: 30px; height: 30px;'> </a></td>";
    } else {
      echo "<td></td>"; // Columna vacía en el primer registro
      $firstRow = false; // Actualizar la bandera después del primer registro
    }
  
    echo "</tr>";
  }
  $sql = "SELECT * FROM respuestas";
  $result = $conn->query($sql);

  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
  
    foreach ($row as $value) {
      echo "<td>" . $value . "</td>";
    }
  
    if (!$firstRow) {
      echo "<td><a href='php/eliminarrespuesta.php?id=" . $row["id"] . "' onclick=\"return confirm('¿Estás seguro que deseas eliminar este registro?');\"> <img src='img/eliminar.png' style='width: 30px; height: 30px;'> </a></td>";
    } else {
      echo "<td></td>"; // Columna vacía en el primer registro
      $firstRow = false; // Actualizar la bandera después del primer registro
    }
  
    echo "</tr>";
  }

echo "</table>";
echo "<br><br>";
  
  //Tabla modificar
  
  ?><h1>Modificar preguntas</h1><?php
  // Obtener el primer registro de la tabla
$sql = "SELECT * FROM preguntas LIMIT 1";
$result = $conn->query($sql);

// Verificar si se encontraron registros
if ($result->num_rows > 0) {
  // Obtener los nombres de las columnas de la tabla
  $columns = $result->fetch_assoc();
  
  // Mostrar el formulario
  echo "<form action='php/modificacion.php' method='post'>";
  
  // Iterar por las columnas y mostrar los campos
  foreach ($columns as $column_name => $value) {
    if ($column_name !== "Id_e") {
      echo "<label for='$column_name'>$column_name:</label>";
      echo "<input type='text' name='$column_name' id='$column_name' value='$value' required><br><br>";
    }
  }
  
  echo "<input type='submit' value='Enviar'>";
  echo "</form>";
} else {
  echo "No se encontraron registros.";
}

  $conn->close();
  ?>
<a href="index.php">Regresar</a>
</body>
</html>
