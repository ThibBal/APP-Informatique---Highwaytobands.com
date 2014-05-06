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
		<form action="index.php?page=creationconcert" method="post"> 
			<span id="blabla">Création évènement : Veuillez compléter les champs suivants</span>
	<ul id="formulaire">
		<li class="champs"><span>Nom : </span><input name=login class= "box" type="text"></li>
		<li class="champs"><span>Salle : </span><input name=salle class="box" type="text"></li>
		<li class="champs"><span>Artiste : </span><input name=artist class= "box" type="text"></li>
		<li class="champs"><span>Date : </span><input name=date class="box" type="text"></li>
		<li class="champs"><span>Description : </span> <br/> <textarea rows=5 cols=50 name=description ></textarea></li>
		<li class="champs"><span>Prix : </span><input name=price class="box" type="text" /></li>
		<li class="CGU"><span>J'accepte les <a href="conditions.php">Conditions Générales d'Utilisation</a></span><input type="checkbox" name="CGU" value="checked"/></li>
		
	</ul>

	<div id="envoi"><input type="submit" value="S'inscrire" /></div>


	</form>
</div>
<?php include 'controleurs/footer.php' ?>	
	</body>
		</html>
