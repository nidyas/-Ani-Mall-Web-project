<?php
include_once "../controller/replyform.php";
include_once "../model/Comment.php";

$alb = new CommentC();
$al = new Comment();
$al->setId(rand(1,999999));
$al->setNom($_GET["nom"]);
$al->setMail($_GET["mail"]);
$al->setAddr($_GET["addr"]);
$al->setComment($_GET["comment"]);
 $alb->ajouter($al);
 //$alb->setComment($this->checkfForBadWords($alb));

 header("Location: ".$_SERVER['HTTP_REFERER']);

?>