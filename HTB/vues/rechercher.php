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
	<?php include 'controleurs/header.php' ?>

	<div id="contenu">

			<h2 class="titre"> Recherche de "<?php echo $recherche; ?>"</h2>

<h3>Salles : </h3>
<?php
	while ($donnees = $salle->fetch()){ ?> 
	<div class=para><a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?> </a></br></div>
	<?php } ?>

<h3>Artistes : </h3> 
<?php
	while ($donnees = $artiste->fetch()){ ?> 
	<div class=para>
	<a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?> </a></br> </div>
	<?php } ?>

<h3>Concerts : </h3> 
<?php
	while ($donnees = $event->fetch()){ ?> 
	<div class=para>
	<a href="index.php?page=concert&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?> </a></br> </div>
	<?php } ?>
	
<h3>Membres : </h3> 
<?php
	while ($donnees = $membre->fetch()){ ?> 
	<div class=para>
	<a href="index.php?page=compte&id=<?php echo $donnees['id']; ?>"><?php echo $donnees['login']; ?> </a></br> 
</div>
	<?php } ?>




		</div>




	
	<?php include 'controleurs/footer.php' ?>		
</body>
</html>