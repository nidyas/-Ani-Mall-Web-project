<?php
class Review{
    private $id;
    private $name;
    private $email;
    private $content;
    private $rate;
    public function __construct($id, $name, $email, $content,$rate){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->content = $content;
        $this->rate = $rate;

    }
    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->name;
    }
    public function getmail(){
        return $this->email;
    }
    public function getNbStars(){
        return $this->rate;
    }
    public function getContent(){
        return $this->content;
    }

}
?>