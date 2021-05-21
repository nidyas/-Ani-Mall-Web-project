<?php
include "../connexionyas.php";

class CommentC{

	public function checkfForBadWords($comment){
		$con = mysqli_connect("127.0.0.1", "root", "", "comments");
		$words = array();
		$cont =  $comment->getComment();
		$word = "";
		$new = "";
		$wordStart = true;
		$i=0;
		do{
			while($cont[$i] != ' ' && strlen($cont) >= $i){
				$word .= $cont[$i];
				$i++;
			}
			if($word != ""){
				$sql1="select * from bad_words where word='".$word."'";
				if($result = mysqli_query($con, $sql1)){
					if(mysqli_num_rows($result) > 0){
						$sz = strlen($word);
						$word = "";
						for($j=0; $j<=$sz-1; $j++){
							$word .= "*";
						}
					}
				}
				$new .= $word;
				$word = "";
				$new .= $cont[$i];
			}else{
				$new .= $cont[$i];
			}
			$i++;
		}while(strlen($cont) >= $i);
		return $new;
	}

      public function ajouter($comment){

			$comment->setComment($this->checkfForBadWords($comment));
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