
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/header_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>
<header>
	
	<div id="logo"><a href="index.php?page=accueilvue"><img width=150 src="img/logo.png" alt="Logo du site"></a></div>

	<?php 
	if(!isset($_SESSION['login'])){ ?>
	
	<form id="connexion" method="post" action="index.php?page=headercontroleur">
		<input type="text" name="login" placeholder =" login" size="12"/>
		<input type="password" name="password" placeholder =" mot de passe" size="12" />
		<input type="submit" value="OK" />
	</form>
<?php }else{ ?> <div id="connexion"> 
	Bonjour <a href="index.php?page=comptecontroleur"><?php echo $_SESSION['login']?></a> 
	<a href="index.php?page=logout">
		<input type="submit" value="Déconnexion" /></div>
	
	<?php
}
?>

<div id="menu">
	<ul>
		<li><a href="index.php?page=eventcontroleur">Concerts</a>
			<ul>
				<li><a href="#">Les plus populaires</a></li>
				<li><a href="#">Ordre alphabétique</a></li>
				<li><a href="#">Les plus récents</a></li>
			</ul>
		</li>
		<li><a href="index.php?page=sallecontroleur">Salles</a>
			<ul>
				<li><a href="#">Les plus populaires</a></li>
				<li><a href="#">Ordre alphabétique</a></li>
				<li><a href="#">Proche de chez vous</a></li>
			</ul>
		</li>
		<li><a href="index.php?page=artistecontroleur">Artistes</a>
			<ul>
				<li><a href="#">Les plus populaires</a>
				</li>
				<li><a href="#">Ordre alphabétique</a>
				</li>
				<li><a href="#">Par style de musique</a>
				</li>
			</ul>
		</li>
		<li><a href="index.php?page=inscriptioncontroleur">Votre compte</a></li>
		<li><a href="forum.php">Forum</a></li>
		<li><a href="contact.html">Contact</a></li>					
	</ul>
</div>

<div id="rechercher"><form method="post" action="index.php?page=recherchercontroleur.php">
	<input type="text" placeholder =" Rechercher" size="20" />
</form></div>		
</header>