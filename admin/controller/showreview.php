<?php
include "../connexion.php";
require_once '../Modele/review.php';
class ReviewC{

    public function afficherreview()
        {   $sql="SELECT * FROM reviews;";
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