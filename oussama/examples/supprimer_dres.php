<?PHP
    include "../controller/dresseurC.php";

    $dresseurC = new dresseurC();

    
    if (isset($_POST["id_dres"])){
        $dresseurC->supprimer_dresseur($_POST["id_dres"]);
        header('Location:afficher_dres.php');
    }

?> 