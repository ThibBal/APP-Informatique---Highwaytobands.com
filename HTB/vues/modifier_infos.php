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


				<li class="champs"><span>Nom : </span><input name=name value="<?php echo($data['name']) ?>" class= "box" type="text"></li>
				<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" value="<?php echo($data['mail']) ?>" type="email"></li>
				<li class="champs"><span>Code postal : </span><input name=zipcode class="box" value="<?php echo($data['zipcode']) ?>" type="text"></li>
				<li class="champs"><span>Changer de mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password"></li>
				<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password"></li><li class="champs"><span>Changer la photo de profil : </span><input name=fichier class="box" type="file" /></li>


			</ul>

			<div id="envoi"><input type="submit" value="Modifier vos informations" /></div>


		</form>

		<?php } ?>

		<?php if($_SESSION['statut']=='artiste'){ ?>
		<form enctype="multipart/form-data" action="index.php?page=modifier_infos" method="post">
			
			<ul id="formulaire">

				<li class="champs"><span>Nom : </span><input name=name value="<?php echo($data['name']) ?>" class= "box" type="text"></li>
				<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" value="<?php echo($data['mail']) ?>" type="email"></li>
				<li class="champs"><span>Description : </span><textarea name=description rows=5 cols=50><?php echo($data['description']) ?></textarea></li>
				<li class="champs"><span>Style de musiques : </span>
					<SELECT name=style size="1">
						<option><?php echo($data['style']) ?>
						<?php
						require('modeles/style.php');
						$style=liste_style();
						while ($liste = $style->fetch()) { ?>
						<OPTION value="<?php echo $liste['style']; ?>"><?php echo $liste['style']; ?>
							<?php } ?>
						</SELECT></li>
						<li class="champs"><span>Changer de mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password"></li>
						<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password"></li>


						<li class="champs"><span>Changer la photo de profil : </span><input name=fichier class="box" type="file" /></li>

					</ul>
					<div id="envoi"><input type="submit" value="Modifier vos informations" /></div>


				</form>

				<?php } ?>

				<?php if($_SESSION['statut']=='salle'){ ?>
				<form enctype="multipart/form-data" action="index.php?page=modifier_infos" method="post">

					<ul id="formulaire">

						<li class="champs"><span>Nom : </span><input name=name value="<?php echo($data['name']) ?>" class= "box" type="text"></li>
						<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" value="<?php echo($data['mail']) ?>" type="email"></li>
						<li class="champs"><span>Numéro de voie : </span><input name=numero class="box" min="0" type="number"  value="<?php echo($data['numero']) ?>"></li>
						<li class="champs"><span>Voie : </span><input name=voie class="box" type="text"  value="<?php echo($data['voie']) ?>"></li>
						<li class="champs"><span>Ville : </span><input name=ville class="box" type="text"  value="<?php echo($data['ville']) ?>"></li>
						<li class="champs"><span>Code postal : </span><input name=zipcode class="box" value="<?php echo($data['zipcode']) ?>" type="text"></li>
						<li class="champs"><span>Pays : </span><input name=pays class="box" type="text"  value="<?php echo($data['pays']) ?>"></li>
						<li class="champs"><span>Horaires : </span></br><textarea name=hours rows=2 cols=30><?php echo($data['hours']) ?></textarea></li>
						<li class="champs"><span>Numéro de téléphone : </span><input name=phone class="box"  type="tel" value="<?php echo($data['phone']) ?>"</li>
						<li class="champs"><span>Capacité : </span><input name=capacity class="box" min="0" type="number" value="<?php echo($data['capacity']) ?>"</li>
						<li class="champs"><span>Description : </span><textarea name=description rows=5 cols=50><?php echo($data['description']) ?></textarea></li>
						<li class="champs"><span>Changer la photo de profil : </span><input name=fichier class="box" type="file" /></li>
						<li class="champs"><span>Changer de mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password"></li>
						<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password"></li>

					</ul>

					<div id="envoi"><input type="submit" value="Modifier vos informations" /></div>


				</form>

				<?php } ?>
			</div>
			<?php include 'controleurs/footer.php' ?>	
		</body>
		</html>

		