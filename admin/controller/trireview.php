<?php
include "../connexion.php";
require_once '../Modele/review.php';

	  function trireview()
        {   
			$db = config::getConnexion();
			$sql="SELECT * FROM reviews order by rate DESC";
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
	



trireview();
header("Location: ". $_SERVER['HTTP_REFERER']);
?>