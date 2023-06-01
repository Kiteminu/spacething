<?php
/*
Archivo:  Usuario.php
Objetivo: clase que encapsula la información de un usuario
Autor:    
*/
include_once("AccesoDatos.php");
class Enternight{
	private $nClave = "";
	private $sPwd = "";
	private $oAD = null;
	private $nId="";
	 private $sCorr="";

	function setId($pnId){
		$this->nId = $pnId;
	 }
	 function getId(){
		return $this->nId;
	 }

	  function setCorr($psCorr){
		 $this->sCorr = $psCorr;
	  }
	  function getCorr(){
		 return $this->sCorr;
	  }

	public function getClave(){
		return $this->nClave;
	}
	public function setClave($pnClave){
		$this->nClave = $pnClave;
	}

	public function getPwd(){
		return $this->sPwd;
	}
	public function setPwd($psPwd){
		$this->sPwd = $psPwd;
	}


	function insertar(){
	   $oAccesoDatos=new AccesoDatos();
	   $sQuery="";
	   $nAfectados=-1;
		  if ($this->nClave == "" OR $this->sPwd == "" OR 
			  $this->sCorr == "")
			 throw new Exception("Users->insertar(): faltan datos");
		  else{
			 if ($oAccesoDatos->conectar()){
				 $sQuery = "INSERT INTO users (nCveUsu, sPwd, correo) 
				   VALUES ('".$this->nClave."', '".$this->sPwd."', 
				   '".$this->sCorr."');";
				$nAfectados = $oAccesoDatos->ejecutarComando($sQuery);
				$oAccesoDatos->desconectar();			
			 }
		  }
		  return $nAfectados;
	   }
	
	public function buscarCvePwd(){
	$bRet = false;
	$sQuery = "";
	$arrRS = null;
		if (($this->nClave == "" || $this->sPwd == "") )
			throw new Exception("Users->buscar: faltan datos");
		else{
			$sQuery = "SELECT t1.nIdPersonal 
					   FROM users t1
					   WHERE t1.nCveUsu = '".$this->nClave."'
					   AND t1.sPwd = '".$this->sPwd."'";
			//Crear, conectar, ejecutar, desconectar
			$oAD = new AccesoDatos();
			if ($oAD->conectar()){
				$arrRS = $oAD->ejecutarConsulta($sQuery);
				$oAD->desconectar();
				if ($arrRS != null){
					$bRet = true;
				}
			}
		}
		return $bRet;
	}
}
?>