﻿<?php
/*
Archivo:  login.php
Objetivo: verifica clave y contraseña contra repositorio a través de clases
Autor:   BAOZ 
*/
include_once("modelo\Usuario.php");
session_start();
$sErr="";
$sCve="";
$sNom="";
$sPwd="";
$sOpe="";	
$oUsu = new Usuario();
	/*Verificar que hayan llegado los datos*/
	if (isset($_POST["txtCve"]) && !empty($_POST["txtCve"]) &&
		isset($_POST["txtPwd"]) && !empty($_POST["txtPwd"])){
		$sOpe = $_POST["txtOpe"];
		$sCve = $_POST["txtCve"];
		$sPwd = $_POST["txtPwd"];
		$oUsu->setClave($sCve);
		$oUsu->setPwd($sPwd);
		
		
		try{
			if ( $oUsu->admc() ){
			$_SESSION["usu"] = $oUsu;
			$sOpe = 'a';
		}else if ( $oUsu->buscarCvePwd() ){
				$_SESSION["usu"] = $oUsu;
			}
			else{
				$sErr = "Usuario o contraseña incorrecta";
			}
		}catch(Exception $e){
			error_log($e->getFile()." ".$e->getLine()." ".$e->getMessage(),0);
			$sErr = "Error al acceder a la base de datos";
		}
	}
	else
		$sErr = "Faltan datos";
	
		if ($sOpe == "a" && $sErr == ""){
			header("Location: admin.php");
		}
	else if ($sErr == "")
		header("Location: inicio.php");
	else{
		?><script type="text/javascript">alert("Hola Mundo!");</script><?php
		header("Location: index.php?sError=".$sErr);
	}

?>