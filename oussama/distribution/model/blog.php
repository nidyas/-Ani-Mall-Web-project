<?php
	class Comment{
		private ?string$nom ;
		private ?string $titre ;
		private ?float $prix ;
		private ?string $images=null ;

		function T__construct(int $idalbum,string $nom, string $prenom, string $email, string $login, string $password){
			$this->idalbum=$idalbum;
			$this->titre=$titre;
			$this->prix=$prix;
			$this->image=$images;
		}
		function __construct(){

		}
		function getidalbum(): int{
			return $this->idalbum;
		}
		function getTitre(): string{
			return $this->titre;
		}
		function getprix(): float{
			return $this->prix;
		}
		function getimage():string{
			return $this->images;
		}

		function setidalbum( $idalbum){
			$this->idalbum=$idalbum;
		}
		function settitre($titre){
			$this->titre = $titre;;
		}
		function setprix( $prix){
			$this->prix=$prix;
		}
		function setimage(string $images){
			$this->image=$images;
		}
	}
?>