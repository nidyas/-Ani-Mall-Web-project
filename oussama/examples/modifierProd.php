<?php
    include "../controller/ProduitC.php";
    include_once '../model/Produit.php';

	$ProduitC = new ProduitC();
	$error = "";

	if (
        isset($_POST["prix"]) &&
        isset($_POST["image"]) &&
        isset($_POST["quantite"]) && 
        isset($_POST["titre"]) &&
        isset($_POST["description"])
    ){
		if (
            !empty($_POST["prix"]) && 
            !empty($_POST["image"]) && 
            !empty($_POST["quantite"]) && 
            !empty($_POST["titre"]) && 
            !empty($_POST["description"])
        ) {
            $Prod = new Produit(
                $_POST['prix'],
                $_POST['image'],
                $_POST['quantite'],
                $_POST['titre'],
                $_POST['description']
            );
            
            $ProduitC->modifierProduit($Prod, $_GET['idProduit']);
            //header('Location:afficherProduit.php');
        }
        else
            $error = "Missing information";
	}

?>
<html>
	<head>
		<title>Modifier Produit</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherProduit.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['idProduit'])){
				$Prod = $ProduitC->recupererProduit1($_GET['idProduit']);
				
		?>
		<center><h2> Fiche Personnelle </h2></center>
		<form action="" method="POST">
            <table align="center">
            
                
                <tr>
                    <td>
                        <label for="titre">Titre:
                        </label>
                    </td>
                    <td><input type="varchar" name="titre" idProduit="titre" maxlength="100"></td>
                </tr>

                <tr>
                    <td>
                        <label for="description">Description:
                        </label>
                    </td>
                    <td><input type="text" name="description" idProduit="description" maxlength="100"></td>
                </tr>

				<tr>
                    <td>
                        <label for="image">Image:
                        </label>
                    </td>
                    <td><input type="file" name="image" idProduit="image" accept="image/png, image/jpeg"></td>
                </tr>

                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td><input type="int" name="prix" idProduit="prix" maxlength="6"></td>
                </tr>

                <tr>
                    <td>
                        <label for="quantite">Quantite:
                        </label>
                    </td>
                    <td><input type="int" name="quantite" idProduit="quantite" maxlength="50"></td>
                </tr>
                
                       
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>