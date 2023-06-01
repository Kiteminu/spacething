<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores enviados por el formulario
  $pregunta1 = $_POST["pregunta1"];
  $pregunta2 = $_POST["pregunta2"];
  $pregunta3 = $_POST["pregunta3"];
  $pregunta4 = $_POST["pregunta4"];
  $pregunta5 = $_POST["pregunta5"];
  
  // Realizar la actualización del registro
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
  
  $sql = "UPDATE preguntas SET pregunta1 = '$pregunta1', pregunta2 = '$pregunta2', pregunta3 = '$pregunta3',
  								pregunta4 = '$pregunta4',  pregunta5 = '$pregunta5' LIMIT 1";
  
  if ($conn->query($sql) === TRUE) {
    echo "Las preguntas han sido modificadas correctamente.";
  } else {
    echo "Error al modificar las preguntas: " . $conn->error;
  }
  echo"<br><a href='../admin.php'>Regresar</a>";
  $conn->close();
}
?>
