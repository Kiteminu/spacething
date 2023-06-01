<?php
/*
Archivo:  Usuario.php
Objetivo: clase que encapsula la información de un usuario
Autor:    
*/
include_once("AccesoDatos.php");
class Usuario{
	private $nClave = "";
	private $sPwd = "";
	private $oAD = null;
	private $nid = "";

	public function getId(){
		return $this->nid;
	}
	public function setId($valor){
		$this->nid = $valor;
	}

	public function getClave(){
		return $this->nClave;
	}
	public function setClave($valor){
		$this->nClave = $valor;
	}

	public function getPwd(){
		return $this->sPwd;
	}
	public function setPwd($valor){
		$this->sPwd = $valor;
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

		function admc(){
			$oAccesoDatos=new AccesoDatos();
			$sQuery="";
			$arrRS=null;
			$bRet = false;
			   if (($this->nClave == "" || $this->sPwd == "") )
				  throw new Exception("Users->buscar(): faltan datos");
			   else{
				  if ($oAccesoDatos->conectar()){
					  $sQuery = " SELECT correo
							  FROM users
							  WHERE nCveUsu = '".$this->nClave."'
						   AND nIdPersonal = 1 AND sPwd = '".$this->sPwd."'";
					 $arrRS = $oAccesoDatos->ejecutarConsulta($sQuery);
					 $oAccesoDatos->desconectar();
					 if ($arrRS){
							$bRet = true;
						
					 }
				  } 
			   }
			   return $bRet;
			}
}
?>