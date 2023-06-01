<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spacey";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtención de los datos del formulario
$pregunta1 = $_POST["pregunta1"];
$pregunta2 = $_POST["pregunta2"];
$pregunta3 = $_POST["pregunta3"];
$pregunta4 = $_POST["pregunta4"];
$pregunta5 = $_POST["pregunta5"];

// Insertar los datos en la base de datos
$sql = "INSERT INTO respuestas (pregunta1, pregunta2, pregunta3, pregunta4, pregunta5)
        VALUES ('$pregunta1', '$pregunta2', '$pregunta3', '$pregunta4', '$pregunta5')";

if ($conn->query($sql) === TRUE) {
    echo "Respuestas guardadas correctamente.";
} else {
    echo "Error al guardar las respuestas: " . $conn->error;
}
header("Location: ../gracias.html");

$conn->close();
?>