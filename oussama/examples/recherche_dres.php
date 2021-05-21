

<!DOCTYPE html>
<html>
<head>
	<title>Search Bar</title>
  <!-- <link rel="stylesheet" href="../assets/dmak_style.css" /> -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<br>
<a class="btn btn-primary " href="afficher_dres.php"  >Retour</a>
<br>
<br>
<form method="post">
<label>Recherche par n'importe quel critére </label>
<input type="text" name="search">
<input class="btn btn-primary " type="submit" name="submit">

		<br><br><br>
		<table class="tableau-style"> 
    
    <?php
      $con = new PDO("mysql:host=localhost;dbname=webdev",'root','');

      if (isset($_POST["submit"])) {
        $str = $_POST["search"];
        $sth = $con->prepare("SELECT * FROM dresseur WHERE nom = '$str' OR prenom = '$str' or adresse='$str'");
      
        $sth->setFetchMode(PDO:: FETCH_OBJ);
        $sth -> execute();
      
        if($row = $sth->fetch())
        {

        ?>	
        								<table class="table">

			<tr>
      
				<th>Nom</th>
        <th>Prénom</th>
				<th>Num_tel</th>
        <th>Adresse</th>
				
			</tr>
			<tr>
				<td><?php echo $row->nom;?></td>
				<td><?php echo $row->prenom; ?></td>
        <td><?php echo $row->num_tel; ?></td>
        <td><?php echo $row->adresse;?></td>

				
				
			</tr>

		</table>
<?php 
	}
	
		else
			echo "Le critére saisi ne trouve pas dans la table";

}

?>
</form>

</body>
</html>