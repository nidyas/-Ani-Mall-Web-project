<?PHP
	include "../controller/categorieC.php";

	$categC = new categorieC();
	
	if (isset($_POST["IdCateg"])){
		$categC->supprimerCategorie($_POST["IdCateg"]);
		header('Location:afficher_categ.php');
	}

?>