<?PHP
	include "../controller/ProduitC.php";

	$ProduitC=new ProduitC();
	
	if (isset($_POST["idProduit"])){
		$ProduitC->supprimerProduit($_POST["idProduit"]);
		header('Location:afficher_prod.php');
	}

?>