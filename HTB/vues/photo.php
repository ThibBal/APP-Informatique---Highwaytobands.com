<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/inscription_style.css" />
<body>
	<?php include 'controleurs/header.php' ?>
	<div id="inscription">
		<form enctype="multipart/form-data" action="index.php?page=ajouter_photo" method="post">
			<span id="blabla">Ajouter une photo</span>
	<ul id="formulaire">
		<li class="champs"><span>Nom : </span><input name=name class= "box" type="text"></li>
		<li class="champs"><span>Date : </span><input name=date class="box" type="date" ></li>
		<li class="champs"><span>Fichier : </span><input name=fichier class="box" type="file" /></li>
	</ul>

	<div id="envoi"><input type="submit" value="Ajouter" /></div>


	</form>

</div>
<div id="inscription">
		<form action="index.php?page=supprimer_photo" method="post">
			<span id="blabla">Supprimer une photo</span>
	<ul id="formulaire">
		<li class="champs"><span>Choix : </span><SELECT name=nom size="1">
			<?php

while ($photo = $photos->fetch())
{
?>
    <OPTION><?php echo $photo['name']; ?>
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
