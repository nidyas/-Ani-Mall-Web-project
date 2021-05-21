<?php
include "connexionyas.php";

function supprimer($id)  
{
    try 
    {
      $bd = config::getConnexion();
      $query = $bd->prepare('delete from reviews where id =:id');
      
      $query->execute
      ([
          ':id' => $id
      ]);
    } 
    catch (PDOException $E) 
    {
      $E->getMessage();
    }
}
supprimer($_GET['id']);
header("Location: ". $_SERVER['HTTP_REFERER']);

?>
