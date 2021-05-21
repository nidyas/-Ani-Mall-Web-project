<?php
session_start();
require_once('config.php');
require_once('db_class.php');
$connection = new dbController('localhost', 'root', '', 'centravel');
$connection->logOut(); 
header('Location: index.php');
?>
