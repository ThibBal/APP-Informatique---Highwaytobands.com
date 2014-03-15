<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="inscription_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'header.php' ?>
	<div id="inscription">
		<form method="post" action="envoi.php">
			<span id="blabla">Inscription : Veuillez compléter les champs suivants</span>
	<ul id="formulaire">
		<li class="champs"><span>Pseudo : </span><input class= "box" type="text"></li>
		<li class="champs"><span>Mot de passe : </span><input class="box" type="password"></li>
		<li class="champs"><span>Adresse E-Mail : </span><input class="box" type="mail"></li>
		<li class="champs"><span>Code postal : </span><input class="box" type="text"></li>
		<li id="CGU"><span>J'accepte les <a href="conditions.php">Conditions Générales d'Utilisation</a></span><input type="checkbox"/></li>
		
	</ul>

	<a href="envoi.php"><div id="envoi">S'inscrire</div></a>

</div>
<footer>
		<a href="faq.html">FAQ</a>
		<a href="legales.html">Mentions légales</a>
	</footer>	
	</body>
		</html>