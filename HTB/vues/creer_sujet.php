<!DOCTYPE html>
<html>
<?php include 'controleurs/header.php' ?>
<link rel="stylesheet" href="css/contact.css" />
<body>
	<div id="contenu">
			<h1 class="titre">Rédiger un nouveau sujet</h1>

			<form action="index.php?page=sujet&R=<?php echo $_GET['R']; ?>" method="post">
	<ul id="formulaire">

		<li class="CGU"> <span>Titre du sujet : </span></br> <input type='text' name=titre> </li>
		<li class="CGU"> <span>Contenu du message : </span></br> <textarea name=contenu rows=20 cols=100> </textarea> </li>
		<div id="envoi"> <input type="submit" value="Créer le sujet" /> </div>
			</form>
	</div>

	
	<?php include 'controleurs/footer.php' ?>
</body>
</html>