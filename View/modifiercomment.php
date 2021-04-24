<?php 
echo "h1";
include_once "../controller/replyform.php";
include_once "../model/Comment.php";
echo "h2";
$alb = new CommentC();
$al = new Comment();
$al->setComment($_GET["comment2"]);
$al2=$_GET["id"];
echo "h3";

$alb->modifierAlbum($al,$al2);

header("Location: ".$_SERVER['HTTP_REFERER']);

?>