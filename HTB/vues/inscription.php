<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/inscription_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'controleurs/header.php' ?>

	<div id="inscription">
		<form enctype="multipart/form-data" action="index.php?page=inscription" method="POST">
			<span id="blabla">Inscription : Veuillez choisir un statut</span>
	<ul id="formulaire">
		<li class="CGU"><span>Vous souhaitez être : </span>
		<span class="statut">Un membre</span><input name="statut" type="radio" value="membre" checked="checked"/>
		<span class="statut">Une salle</span><input name="statut" type="radio" value="salle"/>
		<span class="statut">Un artiste</span><input name="statut" type="radio" value="artiste" /></li>
		<li class="CGU"><span>J'accepte les <a href="index.php?page=conditions">Conditions Générales d'Utilisation</a></span><input type="checkbox" name="CGU" value="checked" required/></li>		
	</ul>

	<div id="envoi"><input type="submit" value="S'inscrire" /></div>


	</form>
</div>
<?php include 'controleurs/footer.php' ?>	
	</body>
		</html>