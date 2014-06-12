<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>
<body>
	<?php include 'vues/header.php' ?>
	
	
<div id="contenu">
		<div id="banniere"><h1>Membres</h1>			
		
		</div>	
	<div class="liste_style">
<div id="banniere2"><h2>Par ordre alphabétique</h2></div>	
<?php

while ($donnees = $membres->fetch())
{

	$abo_artiste=liste_artiste_abo_courte($donnees['id']);
	$abo_salle=liste_salle_abo_courte($donnees['id']);
	?>
   <div class=para>
    <div class="image"><a href="index.php?page=compte&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/membres/<?php echo($donnees['photo']); ?>"></a></div><div class="presentation"><strong>Login</strong> : <a href="index.php?page=compte&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Code-postal</strong> : <?php echo $donnees['zipcode']; ?></br>
    <strong>Artistes préférés</strong> : 
<?php

while ($donnees = $abo_artiste->fetch())
{

	$donnees=info_artiste_abonne($donnees['artiste_id']);
echo ($donnees['name'].','.' '); 
}

?>
<br />
<strong>Salles préférées</strong> : 
<?php

while ($donnees = $abo_salle->fetch())
{

	$donnees=info_salle_abonne($donnees['salle_id']);
echo ($donnees['name'].','.' '); 
}

?>
<br />
</div>
   </div> 
<?php
}



?>
			</div>





		</div>
	

<?php include 'controleurs/footer.php' ?>		
</body>
</html>