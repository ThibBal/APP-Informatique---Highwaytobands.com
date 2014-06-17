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
	<li><a href="index.php?page=liste_concert">Concerts</a>
		<ul><li><a href="index.php?page=concert_pres_de_chez_vous">Proche de chez vous</a></li>
			<li><a href="index.php?page=creation_concert">Créer un concert</a></li>
		</ul>
	</li>
	<li><a href="index.php?page=liste_salle">Salles</a>
		<ul>
			<li><a href="index.php?page=salle_pres_de_chez_vous">Proche de chez vous</a></li>
		
		</ul>
	</li>
	<li><a href="index.php?page=liste_artiste">Artistes</a>
		<ul>
			<li><a href="index.php?page=style">Styles de musique</a>
			</li>
		</ul>
	</li>
	<?php if(!isset($_SESSION['login'])){ ?>
	<li><a href="index.php?page=inscription">Mon compte</a>
	<ul>
			<li><a href="index.php?page=liste_membre">Liste des membres</a>
			</li>
		</ul>
	</li>
<?php }else{ ?> 
<li><a href="index.php?page=compte_perso">Mon compte</a>
<ul>
<li><a href="index.php?page=liste_membre">Liste des membres</a>
			</li>
			</ul></li>
	
	
<?php } ?>
	<li><a href="index.php?page=forum_rubrique">Forum</a></li>
					
</ul>
</div>

<div id="connexion_header">
<?php if(!isset($_SESSION['login'])){ ?>
	<form method="post" action="index.php?page=header">
	<input type="text" name="login" placeholder =" login" size="12"/>
	<input type="password" name="password" placeholder =" mot de passe" size="12" />
	<input type="submit" value="OK" /><a href="index.php?page=inscription">Inscription</a>
</form>

<?php }else{ ?> 
<form method="post" action="index.php?page=logout">
<a href="index.php?page=compte_perso"><?php echo $_SESSION['login']?></br></a>
	
	<center><input type="submit" value="Déconnexion"/></center>
</form>
<?php } ?>
</div>

<div id="message"><?php if(isset($_SESSION['temp'])){ ?>
	<?php echo htmlspecialchars($_SESSION['temp']); 
	unset($_SESSION['temp']); ?>	
		<?php } ?>
<div id="rechercher"><form method="post" action="index.php?page=rechercher">
<input id="rechercherform" type ="text" name="recherche" placeholder =" Rechercher" size="15" />
</form>
</div>	
</div>





</header>