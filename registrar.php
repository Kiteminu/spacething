<?php
/*************************************************************/
/* Archivo:  index.php
 * Objetivo: página inicial de manejo de catálogo,
 *           incluye manejo de sesiones y plantillas
 * Autor:
 *************************************************************/
/*include_once("cabecera.html");
include_once("menu.php");
include_once("aside.html");*/
?>

<link rel="stylesheet" type="text/css" href="css/normalize.css" >
  <link rel="stylesheet" type="text/css" href="css/holhorse.css">
        <section><h4><?php echo((isset($_REQUEST["sError"]))? $_REQUEST["sError"]: ""); ?></h4>
			
			<form name="adge" id="frm" method="post" action="Regi.php">
				Usuario<input type="text" name="txtUsr" required="true"/>
				<br/><br/>
				Correo  <input type="text" name="txtMail" required="true"/>
				<br/><br/>
				Contrase&ntilde;a  <input type="password" name="txtPwd" required="true"/>
				<br/><br/>
				<input type ="submit" value="Registrar" 
				onClick="adge.action='regi.php';"/>
				</form>
				<form action="index.php">
				<button>Cancelar</button>
</form>
			</section>
<?php
/*include_once("pie.html");*/
?>
