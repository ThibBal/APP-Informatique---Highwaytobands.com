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
			<h1 class="titre">Rédiger une nouvelle actualité</h1>

			<form action="index.php?page=actualite" method="post">
	<ul id="formulaire">

		<li class="CGU"> <span>Titre de l'actualité : </span></br> <input type='text' name=titre> </li>
		<li class="CGU"> <span>Contenu : </span></br> <textarea name=contenu rows=20 cols=100> </textarea> </li>
		<div id="envoi"> <input type="submit" value="Poster l'actualité" /> </div>
			</form>
	</div>

	
	<?php include 'controleurs/footer.php' ?>
</body>
</html>