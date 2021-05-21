<?php

class user
{
	private $iduser;
	private $nom;
	private $mail;
	private $pass;


  public function __construct($iduser,$nom,$mail,$pass)
 {

 $this->iduser=$iduser;
 $this->nom=$nom;
 $this->mail=$mail;
 $this->pass=$pass;

 }


 public function getiduser(){return $this->iduser;}
 public function getnom(){return $this->nom;}
 public function getmail(){return $this->mail;}
 public function getpass(){return $this->pass;}




 function setiduser($iduser){
		$this->iduser=$iduser;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setmail($mail){
		$this->mail=$mail;
	}
	function setpass($pass){
		$this->pass=$pass;
	}

}

?>