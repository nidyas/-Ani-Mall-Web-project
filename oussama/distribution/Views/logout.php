<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["nom"]);
unset($_SESSION["pass"]);
unset($_SESSION["mail"]);

header('Location: index.php');

?>