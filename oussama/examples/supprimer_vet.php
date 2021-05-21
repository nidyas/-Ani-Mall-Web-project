<?PHP
    include "../controller/veterinaireC.php";

    $veterinaireC = new veterinaireC();

    
    if (isset($_POST["id_vet"])){
        $veterinaireC->supprimer_veterinaire($_POST["id_vet"]);
        header('Location:afficher_Vet.php');
    }

?> 