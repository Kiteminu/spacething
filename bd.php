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
        
        <h1 class="">BASE DATOSA APISGNAIOGNJOA</h1>
        
    </header>


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