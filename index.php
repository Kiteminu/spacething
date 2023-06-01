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
        <section>
		<h4><?php echo((isset($_REQUEST["sError"]))? $_REQUEST["sError"]: ""); ?></h4>
			<form id="frm" method="post" action="login.php">
				<input type="hidden" name="txtClave" value="">
				Usuario  <input type="text" name="txtCve" required="true"/>
				<br/>
				Contrase&ntilde;a  <input type="password" name="txtPwd" required="true"/>
				<br/>
				<input type="submit" value="Enviar"/>
			</form>
			<p id="shill">No tienes cuenta?<a href="registrar.php" class="menu">Registrate!</a></p>
		</section>
<?php
/*include_once("pie.html");*/
?>
