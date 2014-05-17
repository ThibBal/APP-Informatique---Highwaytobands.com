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
		<form enctype="multipart/form-data" action="index.php?page=modifier_infos_membre" method="post">
			<span id="blabla">Modification des informations personnelles</span>
	<ul id="formulaire">
		<li class="champs"><span>Login : </span><input name=login class= "box" type="text"></li>
		<li class="champs"><span>Changer de mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password"></li>
		<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password"></li>
		<li class="champs"><span>Nom : </span><input name=name value="<?php echo($data['name']) ?>" class= "box" type="text"></li>
		<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" value="<?php echo($data['mail']) ?>" type="email"></li>
		<li class="champs"><span>Code postal : </span><input name=zipcode class="box" value="<?php echo($data['zipcode']) ?>" type="text"></li>
		<li class="champs"><span>Changer la photo de profil : </span><input name=photo class="box" type="file" /></li>
		
		
	</ul>

	<div id="envoi"><input type="submit" value="S'inscrire" /></div>


	</form>
</div>
<?php include 'controleurs/footer.php' ?>	
	</body>
		</html>

		