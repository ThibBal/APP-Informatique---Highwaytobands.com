<link rel="stylesheet" href="header_style.css" />
<link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>
<header>

		<div id="logo"><a href="accueil.php"><img width=150 src="img/logo.png" alt="Logo du site"></a></div>
			
				<form id="connexion" method="post" action="traitement.php">
					<input type="text" placeholder ="pseudo" size="12"/>
					<input type="text" placeholder ="mot de passe" size="12" />
				</form>
			


		
			<div id="menu">
				<ul>
					<li><a href="event.html">Concerts</a>
						<ul>
							<li><a href="#">Les plus populaires</a></li>
							<li><a href="#">Ordre alphabétique</a></li>
							<li><a href="#">Les plus récents</a></li>
						</ul>
					</li>
					<li><a href="salle.html">Salles</a>
						<ul>
							<li><a href="#">Les plus populaires</a></li>
							<li><a href="#">Ordre alphabétique</a></li>
							<li><a href="#">Proche de chez vous</a></li>
						</ul>
					</li>
					<li><a href="groupe.html">Groupes</a>
						<ul>
							<li><a href="#">Les plus populaires</a>
							</li>
							<li><a href="#">Ordre alphabétique</a>
							</li>
							<li><a href="#">Par style de musique</a>
							</li>
						</ul>
					</li>
					<li><a href="contact.html">Votre compte</a></li>
					<li><a href="forum.html">Forum</a></li>
					<li><a href="contact.html">Contact</a></li>					
				</ul>
			</div>

			<div id="rechercher"><form method="post" action="rechercher.php">
			<input type="text" placeholder ="Rechercher" size="20" />
			</form></div>		
	</header>

	