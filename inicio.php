<?php
/*************************************************************/
/* Archivo:  inicio.php
 * Objetivo: p�gina de sesi�n iniciada
 * Autor:  BAOZ  
 *************************************************************/
include_once("modelo\Usuario.php");
session_start();
$sErr = "";
$sNom="";
$sTipo="";
$oUsu=new Usuario();
 
	if (isset($_SESSION["usu"])){
		$oUsu = $_SESSION["usu"];
	}
	else
		$sErr = "Debe estar firmado";
	
	if ($sErr == ""){
		/*include_once("cabecera.html");
		include_once("menu.php");
		include_once("aside.html");*/
	}
	else{
		header("Location: error.php?sErr=".$sErr);
		exit();
	}
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/diseño.css">
</head>
<body>
   
    <header>
        
        <h1 class="">INICIO</h1>
        <button class="abrir-menu" id="abrir"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x-circle-fill"></i></button>
            <ul class="nav-list">
        <li><a href="#">Inicio</a></li>
        <li><a href="galaxia.html">Galaxias</a></li>
        <li><a href="comentarios.php">Comentarios</a></li>
            </ul>
        </nav>
        
    </header>

    <section id="banner">
        <img src="img/espa.jpg" id="uno">
        <div class="contenedor">
            <h2 id="nombre">EXPRI</h2>
            
        </div>
       </section>

       <a href="index.php"><img src="img/rocketman.png" id="tie"></a>


       <section id="inicio">
        <center><h2>Las imagenes a continuaci&oacute;n te guiar&aacute;n hacia las siguientes p&aacute;ginas:</h2>
        <P><ul style:"list-style-type: none;">
            <li>Galaxias</li>
            <li>Sistemas planetarios</li>
            <li>Estrellas</li>
            <li>Sistema solar</li>
            <li>Tierra</li>
            <li>Saturno</li>
</ul>
        </P></center>
      </section>

      <div class="carrusel">
        <div class="carrusel-items">
            <div class="carrusel-item">
			<a href="galaxia.html"><img src="img/loop1.jpg" alt=""></a>
            </div>
            <div class="carrusel-item">
			<a href="sistema.html"><img src="img/loop2.jpg" alt=""></a>
            </div>
            <div class="carrusel-item">
			<a href="estrella.html"><img src="img/loop3.jpg" alt=""></a>
            </div>
            <div class="carrusel-item">
			<a href="iniciop.html"><img src="img/loop4.jpg" alt=""></a>
            </div>
            <div class="carrusel-item">
			<a href="tierra.html"><img src="img/loop5.jpg" alt=""></a>
            </div>
            <div class="carrusel-item">
			<a href="saturno.html"><img src="img/loop6.jpg" alt=""></a>
            </div>
        </div>
      </div>


      <section id="inicio">
        <center><h2>La atm&oacute;sfera de Marte</h2></center>
        <P></P>
      </section>


    <script src="js/formato.js"></script>

    <footer id="pie">
        Derechos Reservados &copy; 2022-2023
        <address>
            <a href="http://www.itorizaba.edu.mx">ITO</a>
        </address>
    </footer>

</body>
</html>	
<?php
//include_once("pie.html");
?>