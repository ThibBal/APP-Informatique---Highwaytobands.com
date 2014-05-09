<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/accueil.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'controleurs/header.php' ?>

	<div id="contenu">
		<div class="article">
			<h1 class="titre"> Recherche </h1>


<?php
	while ($donnees = $salle->fetch()){ ?> 
	<a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>"><?php echo $donnees['name']; ?> </a></br>
	<?php } ?>

<?php
	while ($donnees = $artiste->fetch()){ ?> 
	<a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>"><?php echo $donnees['name']; ?> </a></br> 
	<?php } ?>







		</div>




	
	<?php include 'controleurs/footer.php' ?>		
</body>
</html>