<?php
include "../connexion.php";
require_once '../Modele/Comment.php';
class CommentC{

    public function affichercomment()
        {   $sql="SELECT * FROM comment;";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				while ($row = $liste->fetch()) {
					
					echo $row['nom']."<br>";
				}
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	


        }
?>