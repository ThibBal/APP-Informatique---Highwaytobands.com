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
		<span id="blabla">Modification des informations personnelles</span>

		<?php if($_SESSION['statut']=='membre'){ ?>
		<form enctype="multipart/form-data" action="index.php?page=modifier_infos" method="post">
			
	<ul id="formulaire">
		<li class="champs"><span>Login : </span><input name=login value="<?php echo($data['login']) ?>" class= "box" type="text"></li>
		<li class="champs"><span>Changer de mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password"></li>
		<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password"></li>
		<li class="champs"><span>Nom : </span><input name=name value="<?php echo($data['name']) ?>" class= "box" type="text"></li>
		<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" value="<?php echo($data['mail']) ?>" type="email"></li>
		<li class="champs"><span>Code postal : </span><input name=zipcode class="box" value="<?php echo($data['zipcode']) ?>" type="text"></li>
		<li class="champs"><span>Changer la photo de profil : </span><input name=photo class="box" type="file" /></li>
		
		
	</ul>

	<div id="envoi"><input type="submit" value="Modifier vos informations" /></div>


	</form>

	<?php } ?>

	<?php if($_SESSION['statut']=='artiste'){ ?>
		<form enctype="multipart/form-data" action="index.php?page=modifier_infos" method="post">
			
	<ul id="formulaire">
		<li class="champs"><span>Login : </span><input name=login value="<?php echo($data['login']) ?>" class= "box" type="text"></li>
		<li class="champs"><span>Changer de mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password"></li>
		<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password"></li>
		<li class="champs"><span>Nom : </span><input name=name value="<?php echo($data['name']) ?>" class= "box" type="text"></li>
		<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" value="<?php echo($data['mail']) ?>" type="email"></li>
		<li class="champs"><span>Description : </span><input name=description class="box" value="<?php echo($data['description']) ?>" type="text"></li>
		<li class="champs"><span>Style de musique : </span><input name=style class="box" value="<?php echo($data['style']) ?>" type="text"></li>
		<li class="CGU"><span>Style de musiques : </span><SELECT name=style size="1">
<option value="0" selected disabled> Choisir un style </option>
<OPTION>Rock
<OPTION>Pop
<OPTION>Alternative
<OPTION>Rap
<OPTION>Electronique
</SELECT></li>

		<li class="champs"><span>Changer la photo de profil : </span><input name=photo class="box" type="file" /></li>
		
		
	</ul>

	<div id="envoi"><input type="submit" value="Modifier vos informations" /></div>


	</form>

	<?php } ?>

	<?php if($_SESSION['statut']=='salle'){ ?>
		<form enctype="multipart/form-data" action="index.php?page=modifier_infos" method="post">
			
	<ul id="formulaire">
		<li class="champs"><span>Login : </span><input name=login value="<?php echo($data['login']) ?>" class= "box" type="text"></li>
		<li class="champs"><span>Changer de mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password"></li>
		<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password"></li>
		<li class="champs"><span>Nom : </span><input name=name value="<?php echo($data['name']) ?>" class= "box" type="text"></li>
		<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" value="<?php echo($data['mail']) ?>" type="email"></li>
		<li class="champs"><span>Code postal : </span><input name=zipcode class="box" value="<?php echo($data['zipcode']) ?>" type="text"></li>
		<li class="champs"><span>Changer la photo de profil : </span><input name=photo class="box" type="file" /></li>
		
		
	</ul>

	<div id="envoi"><input type="submit" value="Modifier vos informations" /></div>


	</form>

	<?php } ?>
</div>
<?php include 'controleurs/footer.php' ?>	
	</body>
		</html>

		