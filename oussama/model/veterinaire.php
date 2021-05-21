<?php
class veterinaire
{
    private  $id_vet ;
    private  $nom ;
    private  $prenom ;
    private  $num_tel ;
    private  $adresse ;

    public function __construct(string $nom,string $prenom,int $num_tel,string $adresse)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->num_tel=$num_tel;
        $this->adresse=$adresse;
    }
    function getid_vet(){
		return $this->id_vet;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getnum_tel(){
		return $this->num_tel;
	}
    function getadresse(){
		return $this->adresse;
	}

	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setnum_tel($num_tel){
		$this->num_tel=$num_tel;
	}
    function setadresse($adresse){
		$this->adresse=$adresse;
	}
	
}
?>