<?php
/*
Archivo:  login.php
Objetivo: verifica clave y contraseña contra repositorio a través de clases
Autor:   BAOZ 
*/
include_once("modelo\Enternight.php");
session_start();
$sErr="";
$sCve="";
$sNom="";
$sPwd="";	
$oUsu = new Enternight();
	/*Verificar que hayan llegado los datos*/
	if (isset($_POST["txtUsr"]) && !empty($_POST["txtUsr"]) &&
		isset($_POST["txtPwd"]) && !empty($_POST["txtPwd"])){

		
			$oUsu->setClave($_POST["txtUsr"]);
			$oUsu->setPwd($_POST["txtPwd"]);
			
			$oUsu->setCorr($_POST["txtMail"]);
		

		try{
			
				$nResultado = $oUsu->insertar();
			
		}catch(Exception $e){
			error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
			$sErr = "Error al acceder a la base de datos";
		}
	}
	else
		$sErr = "Faltan datos";
	
	if ($sErr == "")
		header("Location: index.php");
	else{
		?><script type="text/javascript">alert("Hola Mundo!");</script><?php
		header("Location: registrar.php?sError=".$sErr);
	}

?>