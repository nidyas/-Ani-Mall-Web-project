<?php
include "../connexion.php";

public function modifierAlbum($album,$id)
		{
			try 
			{
				$bd = config::getConnexion();
				$query = $bd->prepare('UPDATE album SET titre =:titre, prix= :prix, WHERE idalbum= :id');
			$query->execute
			([
				'titre' => $album->getTitre(),
				'prix' => $album->getprix(),
				'id' => $id ,
			]);
	
	
			echo $query->rowCount() . " records UPDATED successfully <br>";
			} 
			catch (PDOException $E)
			{
				$E->getMessage();
			}
	}
supprimer($_GET['id']);
header("Location: ". $_SERVER['HTTP_REFERER']);

?>
