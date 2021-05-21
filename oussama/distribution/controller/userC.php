<?php  
	include "../config.php";
	require_once '../Model/user.php';

 class userC {
	function ajouteruser($user)
	{
		$sql="insert into user (iduser,nom,mail,pass) values (:iduser,:nom,:mail,:pass)";
		$db = config::getConnexion();
		try
		{
			
       			 $query=$db->prepare($sql);
		
            		 $query->execute([	
			        'iduser' => $user->getiduser(),					 
					'nom' => $user->getnom(),
					'mail' => $user->getmail(),
					'pass' => $user->getpass()
                                      ]);
           
        }
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	
	function afficheruser()
	{
			
			$sql="SELECT * FROM user";
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
function recupereruser($id)
	{
			
			$sql="SELECT * FROM user where iduser =$id";
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

		function checklogin($mail,$password)
	{
			
			$sql="SELECT * FROM user where mail ='$mail' and pass ='$password'";
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



	function supprimeruser($iduser)
	   {
			$sql="DELETE FROM user WHERE iduser= :iduser";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':iduser',$iduser);
			try
			{
				$req->execute();
			}
			catch (Exception $e)
			{
				die('Erreur: '.$e->getMessage());
			}
		}

	function modifieruser($user,$iduser1){
		$sql="UPDATE user SET iduser=:iduser,nom=:nom,mail=:mail,pass=:pass WHERE iduser=:iduser1";
		
		$db = config::getConnexion();
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$iduser=$user->getiduser();
        $nom=$user->getnom();
		$mail=$user->getmail();
        $pass=$user->getpass();
       
           
		$datas = array(':iduser'=>$iduser,':nom'=>$nom,':mail'=>$mail,':pass'=>$pass);
		$req->bindValue(':iduser',$iduser);
		$req->bindValue(':iduser1',$iduser1);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':pass',$pass);
		

	
		
            $s=$req->execute();
			
            header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   //echo " Les datas : " ;
  //print_r($datas);
        }
		
	}
	

	}
?>