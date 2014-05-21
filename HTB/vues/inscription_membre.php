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
	<script type="text/javascript"
src="js/formulaire.js"></script>
	<div id="inscription">
		<form enctype="multipart/form-data" action="index.php?page=membre" method="post">
			<span id="blabla">Inscription : Veuillez compléter les champs suivants</span>
	<ul id="formulaire">
		<li class="champs"><span>Login : </span><input name=login class= "box" type="text"></li>
		<li class="champs"><span>Mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password"></li>
		<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password"></li>
		<li class="champs"><span>Nom : </span><input name=name class= "box" type="text"></li>
		<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" type="email"></li>
		<li class="champs"><span>Code postal : </span><input name=zipcode class="box" type="text"></li>
		<li class="champs"><span>Photo de profil : </span><input name=photo class="box" type="file" /></li>
			
	</ul>

	<div id="envoi"><input type="submit" value="S'inscrire" /></div>


	</form>
</div>
<?php include 'controleurs/footer.php' ?>	
	</body>
		</html>

		