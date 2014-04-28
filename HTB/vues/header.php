<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/header_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<header>
	
	<div id="logo"><a href="index.php?page=accueil"><img width=150 src="img/logo.png" alt="Logo du site"></a></div>


<div id="menu">
	<ul>
		<li><a href="index.php?page=event">Concerts</a>
			<ul>
				<li><a href="index.php?page=liste_concert">Liste des concerts</a></li>
				<li><a href="#">Ajouter un concert</a></li>
				<li><a href="#">Les plus récents</a></li>
			</ul>
		</li>
		<li><a href="index.php?page=salle">Salles</a>
			<ul>
				<li><a href="index.php?page=liste_salle">Liste des salles</a></li>
				<li><a href="#">Ordre alphabétique</a></li>
				<li><a href="#">Proche de chez vous</a></li>
			</ul>
		</li>
		<li><a href="index.php?page=artiste">Artistes</a>
			<ul>
				<li><a href="index.php?page=liste_artiste">Liste des artistes</a>
				</li>
				<li><a href="#">Ordre alphabétique</a>
				</li>
				<li><a href="#">Styles de musique</a>
				</li>
			</ul>
		</li>
		<?php if(!isset($_SESSION['login'])){ ?>
		<li><a href="index.php?page=inscription">Inscription</a>
		<ul>
				<li><a href="index.php?page=inscription_salle">Inscription d'une salle</a>
				</li>
				<li><a href="index.php?page=inscription_artiste">Inscription d'un artiste</a>
				</li>
		</ul>
		</li>
<?php }else{ ?> 
<li><a href="index.php?page=compte">Votre compte</a>
<ul><li><a href="index.php?page=musique">Ajouter / Supprimer une musique</a>
	<li><a href="index.php?page=liste_membre">Liste des membres</a>
				</li>
				</li></ul></li>
		
		
	<?php } ?>
		<li><a href="forum.php">Forum</a></li>
		<li><a href="contact.php">Contact</a></li>					
	</ul>
</div>

<div id="connexion">
	<?php if(!isset($_SESSION['login'])){ ?>
		<form method="post" action="index.php?page=header">
		<input type="text" name="login" placeholder =" login" size="12"/>
		<input type="password" name="password" placeholder =" mot de passe" size="12" />
		<input type="submit" value="OK" />
	</form>
<?php }else{ ?> 
<form method="post" action="index.php?page=logout">
	<a href="index.php?page=compte"><?php echo $_SESSION['login']?></br></a>
		
		<center><input type="submit" value="Déconnexion"/></center>
	</form>
	<?php } ?>
	<div id="message"><?php if(isset($_SESSION['temp'])){ ?>
		<?php echo htmlspecialchars($_SESSION["temp"]); 
		unset($_SESSION['temp']); ?>
		
		
			<?php } ?>
</div>	

</div>
<div id="rechercher"><form method="post" action="index.php?page=rechercher.php">
	<input type="text" placeholder =" Rechercher" size="20" />
</form>
</div>		


	
</header>