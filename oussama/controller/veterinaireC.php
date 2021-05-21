<?php    
	include "../connection.php";
	require_once '../model/veterinaire.php';

	class veterinaireC {
		
		public function ajouter_veterinaire($veterinaire){
			$sql="INSERT INTO veterinaire ( nom , prenom , num_tel, adresse) 
			VALUES (:nom , :prenom , :num_tel, :adresse)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
		        
				$query->execute([
					'nom' => $veterinaire->getnom(),
					'prenom' => $veterinaire->getprenom(),
					'num_tel' => $veterinaire->getnum_tel(),
                    'adresse' => $veterinaire->getadresse(),
	                
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
    
     public function afficher_veterinaire(){
			
        $sql="SELECT * FROM veterinaire";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    public function getVeterinaireByNom($nom) {
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
    function supprimer_veterinaire($id_vet){
        try {
            $pdo = config::getConnexion();
            $query = $pdo->prepare(
                'DELETE FROM veterinaire WHERE id_vet = :id_vet'
            );
            $query->execute([
                'id_vet' => $id_vet
            ]);
        } catch (Exception $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifier_veterinaire($veterinaire,$id_vet){
		$sql="UPDATE veterinaire SET  nom=:nom,prenom=:prenom,num_tel=:num_tel,adresse=:adresse WHERE id_vet=:id_vet";
		
		$db = config::getConnexion();
try{		
        $query=$db->prepare($sql);
        $nom=$veterinaire->getnom();
        $prenom=$veterinaire->getprenom();
        $num_tel=$veterinaire->getnum_tel();
        $adresse=$veterinaire->getadresse();
		$datas = array( 
            ':id_vet'=>$id_vet,
             ':nom'=>$nom,
             ':prenom'=>$prenom,
             ':num_tel'=>$num_tel,
             ':adresse'=>$adresse);
		$query->bindValue(':id_vet',$id_vet);
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
    function recuperer_veterinaire($id_vet){
        $sql="SELECT * from veterinaire where id_vet=$id_vet";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $veterinaire=$query->fetch();
            return $veterinaire;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	}
    ?>