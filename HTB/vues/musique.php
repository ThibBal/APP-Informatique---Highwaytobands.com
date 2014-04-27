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
		<form action="index.php?page=ajouter_musique" method="post">
			<span id="blabla">Ajouter un morceau de musique</span>
	<ul id="formulaire">
		<li class="champs"><span>Nom : </span><input name=nom class= "box" type="text"></li>
		<li class="champs"><span>Album : </span><input name=album class="box" type="text"></li>
		<li class="champs"><span>Fichier : </span><input name=fichier class="box" type="file" /></li>
	</ul>

	<div id="envoi"><input type="submit" value="Ajouter" /></div>


	</form>

</div>
<div id="inscription">
		<form action="index.php?page=supprimer_musique" method="post">
			<span id="blabla">Supprimer un morceau de musique</span>
	<ul id="formulaire">
		<li class="champs"><span>Choix : </span><SELECT name=nom size="1">
			<?php

while ($musique = $extraits->fetch())
{
?>
    <OPTION><?php echo $musique['nom']; ?>
<?php
}
?>

</SELECT></li>
	</ul>

	<div id="envoi"><input type="submit" value="Supprimer" /></div>


	</form>
	
</div>
<?php include 'controleurs/footer.php' ?>	
	</body>
		</html>
