<?php
include "../connexion.php";

class CommentC{

      public function ajouter($comment){
			$sql="INSERT INTO comment (id, nom, mail, addr, comment) 
			VALUES (:id, :nom, :mail, :addr, :comment)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->bindValue(':id', $comment->getId());
				$query->bindValue(':nom', $comment->getNom());
				$query->bindValue(':mail', $comment->getMail());
                $query->bindValue(':addr', $comment->getAddr());
				$query->bindValue(':comment', $comment->getComment());
		
				$query->execute(); 
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
    }
	public function modifierAlbum($comment,$id){
	try 
			{
				$bd = config::getConnexion();
				$query = $bd->prepare('UPDATE comment SET  comment= :comment WHERE id= :id;');
				echo "passa" . $comment->getComment();
				echo "catcouta" . $id; 	
			$query->execute
			([
				'comment' => $comment->getComment(),
				'id' => $id ,
			]);
	
	
			echo $query->rowCount() . " records UPDATED successfully <br>";
			} 
			catch (PDOException $E)
			{
				$E->getMessage();
			}
}
}
?>