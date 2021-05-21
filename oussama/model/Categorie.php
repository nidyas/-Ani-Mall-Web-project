<?php

class Categorie
{
	private $idCateg;
	private $NomCategorie;
	private $descateg;
	
	


public function __construct($idCateg,$NomCategorie,$descateg)
{

$this->idCateg=$idCateg;

$this->NomCategorie=$NomCategorie;
$this->descateg=$descateg;


}


public function getidCategorie(){return $this->idCateg;}
public function getNomCategorie(){return $this->NomCategorie;}
public function getdescription(){return $this->descateg;}




function setidCategorie($idCateg){
		$this->idCateg=$idCateg;
	}

	function setNomCategorie($NomCategorie){
		$this->NomCategorie=$NomCategorie;
	}
	
	function setdescription($descateg){
		$this->descateg=$descateg;
	}
	
}

  ?>