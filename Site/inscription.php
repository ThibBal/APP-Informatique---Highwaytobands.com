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
	<ul>
		<li><span>Pseudo : </span><input class= "box" type="text"></li>
		<li><span>Mot de passe : </span><input class="box" type="password"></li>
		<li><span>Adresse E-Mail : </span><input class="box" type="mail"></li>
		<li><span>Code postal : </span><input class="box" type="text"></li>
		<li><span>J'accepte les <a href="conditions.php">Conditions Générales d'Utilisation</a></span><input type="checkbox"></li>
		<li><span></span></li>
		
	</ul>
</div>
	</body>
		</html>