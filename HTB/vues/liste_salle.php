<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>
<body>
	<?php include 'vues/header.php' ?>
	
	
<div id="contenu">
		<div id="banniere"><h1>Salles</h1>			
		</div>	
	<div class="liste">
<div id="banniere2"><h2>Les plus récentes</h2></div>	
<?php

while ($donnees = $salles->fetch())
{
?>
    <div class=para>
    <div class="image"><a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/salles/<?php echo($donnees['photo']); ?>"></a></div><div class="presentation"><strong>Nom de la salle</strong> : <a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Adresse</strong> : <?php echo ($donnees['numero']); ?> <?php echo ($donnees['voie']); ?> - <?php echo ($donnees['zipcode']); ?>, <?php echo ($donnees['ville']); ?>, <?php echo ($donnees['pays']); ?></br>
    <strong>Description</strong> : <?php echo $donnees['description']; ?><br /></div>
   </div>
<?php
}



?>
			</div>

	<div class="liste">
<div id="banniere2"><h2>Par département</h2></div>	
<?php

while ($donnees = $salles2->fetch())
{
?>
    <div class=para>
    <div class="image"><a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/salles/<?php echo($donnees['photo']); ?>"></a></div><div class="presentation"><strong>Nom de la salle</strong> : <a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Code-postal</strong> : <?php echo $donnees['zipcode']; ?></br>
    <strong>Description</strong> : <?php echo $donnees['description']; ?><br /></div>
   </div>
<?php
}



?>
			</div>


		</div>



		</div>
	
	

<?php include 'controleurs/footer.php' ?>		
</body>
</html>