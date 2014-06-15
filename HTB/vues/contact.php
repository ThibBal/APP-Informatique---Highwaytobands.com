<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/contact.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'controleurs/header.php' ?>

	<div id="contenu">
		<div class="article">
			<h1 class="titre">Coordonnées</h1>
			<div class="titre"><p><a href="#">Numéro de téléphone</a></p>
			<p>01 23 45 67 89</p></div>
			<div class="titre"><p><a href="#">Adresse</a></p>
			<p>26, Rue Notre Dame des Champs </br>
			75006 </br>
			Paris</p></div>
			<div class="titre"><p><a href="#">Transport en commun</a></p>
			<p>Proche de la station Saint-Placide (Ligne 4)</p></div>

		</div>


		<div class="article">
			<h1 class="titre">Contacter un administrateur</h1>
			<p class="concert">
			<form action="index.php?page=envoimessage" method="post">
	<ul id="formulaire">
		<li class="champs"> <span>Votre adresse e-mail : </span> <input name=mail class="box" type="email"></li>
		<li class="CGU"> <span>Sujet du message : </span> <input type='text' name=sujet> </li>
		<li class="CGU"> <span>Email : </span></br> <textarea name=contenumail rows=20 cols=50> </textarea> </li>
		<div id="envoi"> <input type="submit" value="Envoyer l'email" /> </div>
			</form>
			</p>
		</div>

	</div>

	
	<?php include 'controleurs/footer.php' ?>		
</body>
</html>