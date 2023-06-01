<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spacey";

// Obtener el ID del registro a eliminar desde el parámetro de la URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // Si no se proporciona un ID válido, redirigir a la página de comentarios
    header("Location: ../admin.php");
    exit();
}

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para eliminar el registro con el ID proporcionado
$sql = "DELETE FROM respuestas WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado correctamente.";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}
echo"<br><a href='../admin.php'>Regresar</a>";

$conn->close();
?>