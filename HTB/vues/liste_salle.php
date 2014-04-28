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
    <strong>Login</strong> : <?php echo $donnees['login']; ?>
    <strong>Adresse</strong> : <?php echo $donnees['adress']; ?>
    <strong>Code-postal</strong> : <?php echo $donnees['zipcode']; ?>
    <strong>Téléphone</strong> : <?php echo $donnees['phone']; ?>
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