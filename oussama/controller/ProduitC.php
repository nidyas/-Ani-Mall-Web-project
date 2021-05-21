<?php  
	include "../config.php";
	require_once '../model/Produit.php';

class ProduitC {
	function ajouterProduit($Produit)
	{
		$sql="insert into Produit (idProduit,IdCategorie,prix,image,quantite,titre,description) values (:idProduit,:IdCategorie,:prix,:image,:quantite,:titre,:description)";
		$db = config::getConnexion();
		try
		{
       			 $query=$db->prepare($sql);
		
            		 $query->execute([	
			        'idProduit' => $Produit->getidProduit(),
					'IdCategorie' => $Produit->getidcategorie(),					 
			        'prix' => $Produit->getprix(),
					'image' => $Produit->getimage(),
					'quantite' => $Produit->getquantite(),
					'titre' => $Produit->gettitre(),
					'description' => $Produit->getdescription()
					
                                      ]);
           
        }
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	
	function afficherProduit()
	{
			
			$sql="SELECT * FROM Produit";
			$db = config::getConnexion();
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

	function afficherProduitCateg($id)
	{
			
			$sql="SELECT * FROM Produit where IdCategorie=".$id."";
			$db = config::getConnexion();
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


		function recupererProduit($id)
	{
			
			$sql="SELECT * FROM Produit where idProduit =$id";
			$db = config::getConnexion();
		

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



	function supprimerProduit($idProduit)
	   {
			$sql="DELETE FROM Produit WHERE idProduit= :idProduit";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idProduit',$idProduit);
			try
			{
				$req->execute();
			}
			catch (Exception $e)
			{
				die('Erreur: '.$e->getMessage());
			}
		}

	function modifierproduit($produit,$idProduit){
		$sql="UPDATE produit SET idProduit=:iddProduit,prix=:prix,image=:image,quantite=:quantite,titre=:titre,description=:description, IdCategorie=:IdCategorie WHERE idProduit=:idProduit";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$iddProduit=$produit->getidProduit();
        $prix=$produit->getprix();
		$image=$produit->getimage();
        $quantite=$produit->getquantite();
        $titre=$produit->gettitre();
        $description=$produit->getdescription();
		$idcategorie=$produit->getidcategorie();
           
		$datas = array(':iddProduit'=>$iddProduit,':prix'=>$prix,':image'=>$image,':quantite'=>$quantite,':titre'=>$titre,':description'=>$description,':IdCategorie'=>$idcategorie);
		$req->bindValue(':iddProduit',$iddProduit);
		$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':titre',$titre);
		$req->bindValue(':description',$description);
		$req->bindValue(':IdCategorie',$idcategorie);

	
		
            $s=$req->execute();
			
            //header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	

	}
?>