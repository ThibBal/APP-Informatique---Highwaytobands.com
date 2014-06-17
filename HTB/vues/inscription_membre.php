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
		<form enctype="multipart/form-data" action="index.php?page=membre" method="post" id="inscription">
			<span id="blabla">Inscription : Veuillez compléter les champs suivants</span>
	<ul id="formulaire">
		<li class="champs"><span>Login : </span><input name=login class= "box" type="text"  id="login"></li>
		<li class="champs"><span>Mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password" id="pass"></li>
		<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password" id="pass2"></li>
		<span id="pass_error" style="color:red;display:none;"><br/>*Les mots de passe ne sont pas identiques.</span></td>
		<li class="champs"><span>Nom : </span><input name=name class= "box" type="text" id="name"></li>
		<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" type="email" id="mail"></li>
		<span id="mail_error" style="color:red;display:none;"><br/>*Le mail n'est pas valide.</span></td>
		<li class="champs"><span>Code postal : </span><input name=zipcode class="box" type="text"></li>
		<li class="champs"><span>Photo de profil : <span class=small>(jpg, png, gif, jpeg acceptés, 500ko au maximum)</span></span><input name=photo class="box" type="file" /></li>
			
	</ul>

	<div id="envoi"><input type="submit" value="S'inscrire" /></div>


	</form>

</div>





<body>





<?php include 'controleurs/footer.php' ?>	
	</body>
		</html>

		