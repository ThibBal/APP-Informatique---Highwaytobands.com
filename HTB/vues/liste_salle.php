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
		<div id="banniere"><h1>Liste des salles répertoriées</h1>			
		</div>	
	<div class="liste">

<?php

while ($donnees = $salles->fetch())
{
?>
    <p>
    <strong>Nom de la salle</strong> : <a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a>
    <strong>Adresse</strong> : <?php echo $donnees['adress']; ?>
    <strong>Code-postal</strong> : <?php echo $donnees['zipcode']; ?>
    <strong>Téléphone</strong> : <?php echo $donnees['phone']; ?>
     <strong>Capacité</strong> : <?php echo $donnees['capacity']; ?> places
    <strong>Description</strong> : <?php echo $donnees['description']; ?><br />
   </p>
<?php
}



?>
			</div>

		</div>



		</div>
	
	

<?php include 'controleurs/footer.php' ?>		
</body>
</html>