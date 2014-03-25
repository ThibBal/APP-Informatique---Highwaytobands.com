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
		<form action="insert.php" method="post" enctype="multipart/form-data">
			<span id="blabla">Inscription : Veuillez compléter les champs suivants</span>
	<ul id="formulaire">
		<li class="champs"><span>Login : </span><input name=login class= "box" type="text"></li>
		<li class="champs"><span>Mot de passe : </span><input name=password class="box" type="password"></li>
		<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" type="email"></li>
		<li class="champs"><span>Code postal : </span><input name=zipcode class="box" type="text"></li>
		<li class="champs"><span>Photo de profil : </span><input name=photo class="box" type="file" /></li>
		<li class="CGU"><span>Vous souhaitez être : </span><span class="statut">Un membre</span><input name="statut" type="radio" id="membre" checked="checked"/><span class="statut">Une salle</span><input name="statut" type="radio" id="salle"/><span class="statut">Un artiste</span><input name="statut" type="radio" id="artiste" /></li>
		<li class="CGU"><span>J'accepte les <a href="conditions.php">Conditions Générales d'Utilisation</a></span><input type="checkbox" name="CGU"/></li>
		
	</ul>

	<div id="envoi"><input type="submit" value="S'inscrire" /></div>


	</form>
</div>
<?php include 'footer.php' ?>	
	</body>
		</html>

		