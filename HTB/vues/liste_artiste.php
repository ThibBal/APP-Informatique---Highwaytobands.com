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
		<div id="banniere"><h1>Artistes</h1>			
		</div>	
	<div class="liste">
<div id="banniere2"><h2>Par ordre alphabétique</h2></div>	
<?php

while ($donnees = $artistes->fetch())
{
?>
    <div class=para>
    <div class="image"><a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/artistes/<?php echo($donnees['photo']); ?>"></a></div><div class="presentation"><strong>Nom de l'artiste</strong> : <a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Style de musique</strong> : <?php echo $donnees['style']; ?></br>
    <strong>Description</strong> : <?php echo $donnees['description']; ?><br /></div>
   </div>
<?php
}



?>
			</div>

			<div class="liste">
<div id="banniere2"><h2>Par style de musique</h2></div>	
<?php

while ($donnees = $styles->fetch())
{
?>
<div class=para> <div class="image"> <div class="presentation"><h3><?php echo($donnees['style']); ?></h3></div></div></div>
<?php
	$artistes=liste_artiste_style($donnees['style']);
while ($donnees = $artistes->fetch())
{
?>
    <div class=para>
    <div class="image"><a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/artistes/<?php echo($donnees['photo']); ?>"></a></div><div class="presentation"><strong>Nom de l'artiste</strong> : <a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
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