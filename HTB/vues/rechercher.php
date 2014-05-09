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
			<h1 class="titre"> Recherche </h1>

<?php
if (isset=$recherche_salle){ ?>
<p> Vous avez 0 salles correspondant à votre recherche. </p>
<?php
	while ($donnees = $recherche->fetch())
	{ ?> <a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>"><?php echo $donnees['name']; ?> </a> <?php
	}

}			
?>	
		</div>




	
	<?php include 'controleurs/footer.php' ?>		
</body>
</html>