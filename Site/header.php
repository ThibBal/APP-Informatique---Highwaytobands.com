
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="header_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>
<header>
		
		<div id="logo"><a href="accueil.php"><img width=150 src="img/logo.png" alt="Logo du site"></a></div>
			<?php if(!isset($_SESSION['login'])){ ?>
		
				<form id="connexion" method="post" action="identification.php">
					<input type="text" name="login" placeholder =" login" size="12"/>
					<input type="password" name="password" placeholder =" mot de passe" size="12" />
					<input type="submit" value="OK" />
				</form>
			<?php }else{ ?> <div id="connexion"> 
			Bonjour <?= $_SESSION['login']?>
		</div>
				
				 
				<?php
				 }
				 ?>
			
			<div id="menu">
				<ul>
					<li><a href="event.php">Concerts</a>
						<ul>
							<li><a href="#">Les plus populaires</a></li>
							<li><a href="#">Ordre alphabétique</a></li>
							<li><a href="#">Les plus récents</a></li>
						</ul>
					</li>
					<li><a href="salle.php">Salles</a>
						<ul>
							<li><a href="#">Les plus populaires</a></li>
							<li><a href="#">Ordre alphabétique</a></li>
							<li><a href="#">Proche de chez vous</a></li>
						</ul>
					</li>
					<li><a href="artiste.php">Artistes</a>
						<ul>
							<li><a href="#">Les plus populaires</a>
							</li>
							<li><a href="#">Ordre alphabétique</a>
							</li>
							<li><a href="#">Par style de musique</a>
							</li>
						</ul>
					</li>
					<li><a href="inscription.php">Votre compte</a></li>
					<li><a href="forum.php">Forum</a></li>
					<li><a href="contact.html">Contact</a></li>					
				</ul>
			</div>

			<div id="rechercher"><form method="post" action="rechercher.php">
			<input type="text" placeholder =" Rechercher" size="20" />
			</form></div>		
	</header>

	