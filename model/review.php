<?php
class Review{
    private $id_rev;
    private $username;
    private $nb_stars;
    private $content;
    public function __construct($id, $username, $nbstars, $content){
        $this->id_rev = $id;
        $this->username = $username;
        $this->nb_stars = $nbstars;
        $this->content = $content;

    }
    public function getId(){
        return $this->id_rev;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getNbStars(){
        return $this->nb_stars;
    }
    public function getContent(){
        return $this->content;
    }

}
?>