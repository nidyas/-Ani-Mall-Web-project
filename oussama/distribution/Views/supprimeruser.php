<?PHP
	include "..//Controller/userC.php";

	$userC=new userC();
	
	if (isset($_POST["iduser"])){
		$userC->supprimeruser($_POST["iduser"]);
		header('Location:afficher_user.php');
	}

?>