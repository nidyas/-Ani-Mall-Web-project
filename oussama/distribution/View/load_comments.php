<?php
include_once "connexionyas.php";

$db = config::getConnexion();
$sql = "select * from comment";
try{
    $list = $db->query($sql);
}catch(Exception $e){
    echo "error";
}
$link = mysqli_connect("127.0.0.1", "root", "", "comments");
$sql = "select * from comment";
$m =0;
    $res = mysqli_query($link,$sql, $m); 
    
    $num= mysqli_num_rows($res);

echo "<h4 class='text-uppercase'>".$num." comments</h4>";

foreach($list as $row){
    echo '<div class="row comment">
    <div class="col-sm-3 col-md-2 text-center-xs">
      <p><img srlc="img/blog-avatar2.jpg" alt="" class="img-fluid rounded-circle"></p>
    </div>
    <div class="col-sm-9 col-md-10">
      <h5 class="text-uppercase">'.$row['nom'].'</h5>
      <p class="posted"><i class="fa fa-clock-o"></i>'.$row['mail'].'</p>
      <p>'.$row['comment'].'</p>
      <form action="View/modifiercomment.php" method="GET"> 
      <button type="submit" class="reply"><a ><i class="fa fa-reply"></i> Modify</a></button>
      <input type="hidden" name="id" value="'.$row['id'].'">
      <textarea id="comment2" name="comment2" rows="2" class="form-control"></textarea>
      </form>

    </div>
  </div>';
   
}
?>