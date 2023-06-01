<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" type="text/css" href="css/estilocom.css">
</head>
<body id="fondobody">
    <header id="fondobody">     
        <h1 class="">Comentarios</h1>
        <button type="button" class="abrir-menu" id="abrir"><img src="img/listwhite.png" height="30px" width="30px"><i class=""></i></button>
        <nav class="nav" id="nav">
            <button type="button" class="cerrar-menu" id="cerrar"><img src="img/close3.png" height="20px" width="20px"><i class=""></i></button>
            <ul class="nav-list">
                <li><a href="iniciop.html">Inicio</a></li>
                <li><a href="sistema.html">Sistema solar</a></li>
                <li><a href="estrella.html">Estrellas</a></li>
                <li><a href="galaxia.html">Galaxias</a></li>
                <li><a href="#">Comentarios</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Comentarios</h2>
        <?php
        // Realiza la conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "spacey";
        
        // Crea la conexión
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Verifica la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
        
        // Realiza la consulta para obtener el primer registro de la tabla
        $query = "SELECT * FROM preguntas LIMIT 1";
        $result = $conn->query($query);

        
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        
            // Genera el formulario
            echo '<form action="php/guardarespuestas.php" method="post">';
            
            // Etiqueta y campo para la pregunta 1
            echo '<label for="pregunta1">' . $row["pregunta1"] . ':</label>';
            echo '<input type="text" name="pregunta1" id="pregunta1" required>';
        
            // Etiqueta y campo para la pregunta 2
            echo '<label for="pregunta2">' . $row["pregunta2"] . ':</label>';
            echo '<input type="text" name="pregunta2" id="pregunta2" required>';
        
            // Etiqueta y campo para la pregunta 3
            echo '<label for="pregunta3">' . $row["pregunta3"] . ':</label>';
            echo '<input type="text" name="pregunta3" id="pregunta3" required>';
        
            // Etiqueta y campo para la pregunta 4
            echo '<label for="pregunta4">' . $row["pregunta4"] . ':</label>';
            echo '<input type="text" name="pregunta4" id="pregunta4" required>';
        
            // Etiqueta y campo para la pregunta 5
            echo '<label for="pregunta5">' . $row["pregunta5"] . ':</label>';
            echo '<input type="text" name="pregunta5" id="pregunta5" required>';
        
            echo '<input type="submit" value="Enviar">';
            echo '</form>';
        } else {
            echo 'No se encontraron registros.';
        }
        
        // Cierra la conexión
        $conn->close();
        ?>

    </section>

    <script src="js/formato.js"></script>

    <footer id="fondobody">
        Derechos Reservados &copy; 2022-2023
        <address>
            <a href="http://www.itorizaba.edu.mx">ITO</a>
        </address>
    </footer>
</body>
</html>