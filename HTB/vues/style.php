<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>
<body>
	<?php include 'vues/header.php' ?>
	
<div id="contenu">
		<div id="banniere"><h1>Artistes : Par style de musique</h1>			
		</div>	

			<div class="liste_style">
<?php

while ($donnees = $styles->fetch())
{
?>
<h3><?php echo($donnees['style']); ?></h3>
<?php
	$artistes=liste_artiste_style($donnees['style']);
while ($donnees = $artistes->fetch())
{
?>
    <div class="para">
    <div class="image"><a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/artistes/<?php echo($donnees['photo']); ?>"></a></div>
    <div class="presentation"><strong>Nom de l'artiste</strong> : <a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Style de musique</strong> : <?php echo $donnees['style']; ?></br>
    <strong>Description</strong> : <?php echo $donnees['description']; ?><br /></div>
   </div>
<?php
}
}


?>

		</div>



		</div>
	

		</div>
	
	

<?php include 'controleurs/footer.php' ?>		
</body>
</html>