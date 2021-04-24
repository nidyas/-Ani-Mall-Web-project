<?php
	class Comment{
		private ?int $id ;
		private ?string $nom ;
		private ?string $mail ;
		private ?string $addr ;
        private ?string $comment;

		function T__construct( $id, $nom,  $mail,  $addr,  $comment){
			$this->id=$id;
			$this->nom=$nom;
			$this->mail=$mail;
			$this->addr=$location;
            $this->comment = $comment;
		}
		function getId(){
			return $this->id;
		}
		function getNom(){
			return $this->nom;
		}
		function getMail(){
			return $this->mail;
		}
		function getAddr(){
			return $this->addr;
		}
        function getComment(){
			return $this->comment;
		}

		function setId( $idalbum){
			$this->id=$idalbum;
		}
		function setNom($titre){
			$this->nom = $titre;;
		}
		function setMail( $prix){
			$this->mail=$prix;
		}
		public function setAddr( $images){
			$this->addr=$images;
		}
        function setComment( $images){
			$this->comment=$images;
		}
	}
?>