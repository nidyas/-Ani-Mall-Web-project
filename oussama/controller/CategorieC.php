<?php  
	include "../config2.php";
	require_once '../model/Categorie.php';

class categorieC {
	function ajouterCategorie($categorie)
	{
		$sql="insert into categorie (idCateg,NomCategorie,descateg) values (:idCateg,:NomCategorie,:descateg)";
		$db = config2::getConnexion();
		try
		{
       			 $query=$db->prepare($sql);
		
            		 $query->execute([	
			        
					'idCateg' => $categorie->getidCategorie(),					 
			        
					'NomCategorie' => $categorie->getNomCategorie(),
					'descateg' => $categorie->getdescription()
					
                                      ]);
           
        }
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	
	function afficherCategorie()
	{
			
			$sql="SELECT * FROM categorie";
			$db = config2::getConnexion();
			try
			{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e)
			{
				die('Erreur: '.$e->getMessage());
			}	
		}
		function recupererCategorie($id)
	{
			
			$sql="SELECT * FROM categorie where IdCateg =$id";
			$db = config2::getConnexion();
		

			try
			{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e)
			{
				die('Erreur: '.$e->getMessage());
			}	
		}



	function supprimerCategorie($idCateg)
	   {
			$sql="DELETE FROM categorie WHERE IdCateg= :IdCateg";
			$db = config2::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IdCateg',$idCateg);
			try
			{
				$req->execute();
			}
			catch (Exception $e)
			{
				die('Erreur: '.$e->getMessage());
			}
		}

	function modifierCategorie($categorie,$IdCateg){
		$sql="UPDATE categorie SET IdCateg=:IdCategg,NomCategorie=:NomCategorie,descateg=:descateg WHERE IdCateg=:IdCateg";
		
		$db = config2::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$IdCategg=$categorie->getidCategorie();
        $NomCategorie=$categorie->getNomCategorie();
        $descateg=$categorie->getdescription();
		
           
		$datas = array(':IdCategg'=>$IdCategg,':NomCategorie'=>$NomCategorie,':descateg'=>$descateg);
		$req->bindValue(':IdCategg',$IdCategg);
		$req->bindValue(':IdCateg',$IdCateg);
		$req->bindValue(':NomCategorie',$NomCategorie);
		
		$req->bindValue(':descateg',$descateg);
		

	
		
            $s=$req->execute();
			
         //  header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	

	}
?>