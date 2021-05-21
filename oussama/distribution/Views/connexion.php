<?php
include '../Controller/userC.php';
session_start();
$UserC = new userC();


if ( isset($_POST['mail']) and isset($_POST['password']) )
{
    $users = $UserC->checklogin($_POST['mail'] , $_POST['password']);
    if ($users != null)
    {
        foreach ($users as $user) {
            $_SESSION['id']= $user['iduser'];
            $_SESSION['nom']= $user['nom'];
            $_SESSION['mail']= $user['mail'];
            $_SESSION['pass']= $user['pass'];
    
            header('Location: index.php'); 
        }
    }else {
        echo "<script>alert(\"vérifiez l'id et le mot de passe\")</script>";
    }
}
else{
    echo "<script>alert(\"Vérifiez les champs\")</script>";
}



?>