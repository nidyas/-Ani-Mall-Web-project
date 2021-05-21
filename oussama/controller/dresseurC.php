<?php    
	include "../connection.php";
	require_once '../Model/dresseur.php';

	class dresseurC {
		
		public function ajouter_dresseur($dresseur){
			$sql="INSERT INTO dresseur ( nom , prenom , num_tel, adresse) 
			VALUES (:nom , :prenom , :num_tel, :adresse)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
		        
				$query->execute([
					'nom' => $dresseur->getnom(),
					'prenom' => $dresseur->getprenom(),
					'num_tel' => $dresseur->getnum_tel(),
                    'adresse' => $dresseur->getadresse(),
	                
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    
     public function afficher_dresseur(){
			
        $sql="SELECT * FROM dresseur";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    public function getDresseurByNom($nom) {
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'SELECT * FROM nom WHERE nom = :nom'
            );
            $query->execute([
                'nom' => $nom
            ]);
            return $query->fetch();
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    function supprimer_dresseur($id_dres){
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'DELETE FROM dresseur WHERE id_dres = :id_dres'
            );
            $query->execute([
                'id_dres' => $id_dres
            ]);
        } catch (Exception $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifier_dresseur($dresseur,$id_dres){
		$sql="UPDATE dresseur SET  nom=:nom,prenom=:prenom,num_tel=:num_tel,adresse=:adresse WHERE id_dres=:id_dres";
		
		$db = config::getConnexion();
try{		
        $query=$db->prepare($sql);
        $nom=$dresseur->getnom();
        $prenom=$dresseur->getprenom();
        $num_tel=$dresseur->getnum_tel();
        $adresse=$dresseur->getadresse();
		$datas = array( 
            ':id_dres'=>$id_dres,
             ':nom'=>$nom,
             ':prenom'=>$prenom,
             ':num_tel'=>$num_tel,
             ':adresse'=>$adresse);
		$query->bindValue(':id_dres',$id_dres);
		$query->bindValue(':nom',$nom);
		$query->bindValue(':prenom',$prenom);
		$query->bindValue(':num_tel',$num_tel);
        $query->bindValue(':adresse',$adresse);
		
		
            $s=$query->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
    }
    function recuperer_dresseur($id_dres){
        $sql="SELECT * from dresseur where id_dres=$id_dres";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $dresseur=$query->fetch();
            return $dresseur;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	}
    ?>