<?php
include "../connexion.php";
include_once "../model/review.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id=rand(1,999999);
    $name = $_POST["name"];
    $email = $_POST["email"];
    $content = $_POST["content"];
    $rating = $_POST["rating"];
    $review = new Review($id,$name,$email,$content,$rating);

    $sql = "INSERT INTO reviews (id,name,email,content,rate) VALUES ('$id','$name','$email','$content','$rating')";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->bindValue(':id', $review->getId());
        $query->bindValue(':nom', $review->getUsername());
        $query->bindValue(':email', $review->getmail());
        $query->bindValue(':content', $review->getContent());
        $query->bindValue(':rating', $review->getNbStars());
        $query->execute(); 
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }	
}
?>