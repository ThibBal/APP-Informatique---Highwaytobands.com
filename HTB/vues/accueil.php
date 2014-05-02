<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/accueil.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'controleurs/header.php' ?>
	<?php if(!isset($_SESSION['login'])){ ?>
	<a href="index.php?page=inscription"><div id="inscription">
		Inscris toi et profite :
		<ul>
			<li>De contenu personnalisé selon tes préférences</li>
			<li>De services exclusifs</li>
			<li>D'une communauté de passionnés</li>
		</ul>
	</div></a>
	<?php } ?>
	<div id="contenu">
		<div class="article">
			<h1 class="titre">Fil d'actualité</h1>
			<div class="actu"><p><a href="#">Article : Une actualité top du top</a></p>
			<p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita</p></div>
			<div class="actu"><p><a href="#">Article : Une actualité top du top</a></p>
			<p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita</p></div>
			<div class="actu"><p><a href="#">Article : Une actualité top du top</a></p>
			<p>Cumque pertinacius ut legum gnarusratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita</p></div>

		</div>


		<div class="article">
			<h1 class="titre">Evènements à venir</h1>
			<p class="concert"><a href="#">Festival Rock en Seine : 22 Août 2014</a></p>
			<p class="concert"><a href="#">Concert Truc</a></p>
			<p class="concert"><a href="#">Festival Machin</a></p>
		</div>

		<div class="article">
			<h1 class="titre">Photos récentes</h1>
			<p><center><img width=150 src="img/photo1.jpg"></center></p>
			<p><center><img width=150 src="img/photo2.jpg"></center></p>
			<p><center><img width=150 src="img/photo3.JPG"></center></p>
		</div>
	</div>

	
	<?php include 'controleurs/footer.php' ?>		
</body>
</html>