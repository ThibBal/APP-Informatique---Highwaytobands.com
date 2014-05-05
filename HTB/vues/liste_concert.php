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
		<div id="banniere"><h1>Liste des concerts répertoriées</h1>			
		</div>	
	<div class="liste">

<?php

while ($donnees = $concerts->fetch())
{
?>
    <p>
    <strong>Nom de la salle</strong> : <a href="index.php?page=concert&id=<?php echo $donnees['id']; ?>"><?php echo $donnees['name']; ?></a>
    <strong>Adresse</strong> : <?php echo $donnees['login']; ?>
    <strong>Code-postal</strong> : <?php echo $donnees['salle']; ?>
    <strong>Téléphone</strong> : <?php echo $donnees['artist']; ?>
     <strong>Capacité</strong> : <?php echo $donnees['price']; ?> places
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