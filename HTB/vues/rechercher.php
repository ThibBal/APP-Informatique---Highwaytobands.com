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
	<?php include 'controleurs/header.php' ?>

	<div id="contenu">

			<h2 class="titre"> Recherche de "<?php echo $recherche; ?>"</h2>

<h3>Salles : </h3>
<?php
	while ($donnees = $salle->fetch()){ ?> 
    <div class=para>
    <div class="image"><a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/salles/<?php echo($donnees['photo']); ?>"></a></div><div class="presentation"><strong>Nom de la salle</strong> : <a href="index.php?page=salle&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Adresse</strong> : <?php echo ($donnees['numero']); ?> <?php echo ($donnees['voie']); ?> - <?php echo ($donnees['zipcode']); ?>, <?php echo ($donnees['ville']); ?>, <?php echo ($donnees['pays']); ?></br>
    <strong>Description</strong> : <?php echo $donnees['description']; ?><br /></div>
   </div>
	<?php } ?>

<h3>Artistes : </h3> 
<?php
	while ($donnees = $artiste->fetch()){ ?> 
<div class=para>
    <div class="image"><a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/artistes/<?php echo($donnees['photo']); ?>"></a></div><div class="presentation"><strong>Nom de l'artiste</strong> : <a href="index.php?page=artiste&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Style de musique</strong> : <?php echo $donnees['style']; ?></br>
    <strong>Description</strong> : <?php echo $donnees['description']; ?><br /></div>
   </div>
	<?php } ?>

<h3>Concerts : </h3> 
<?php
	while ($donnees = $event->fetch()){ 

	$artiste= info_artiste_concert($donnees['artiste_id']);
$salle=	info_salle_concert($donnees['salle_id']);
	$dateMySQL= $donnees['date'];
                    $date = new DateTime($dateMySQL);

               ?> 
                <div class=para>
    <div class="image"><a href="index.php?page=concert&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/salles/<?php echo $salle['photo']; ?>"><img  src="img/artistes/<?php echo $artiste['photo']; ?>"></a></div><div class="presentation"><strong>Nom du concert</strong> : <a href="index.php?page=concert&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Artiste</strong> : <?php echo $donnees['artiste']; ?></br>
    <strong>Salle</strong> : <?php echo $donnees['salle']; ?></br>
    <strong>Date</strong> : <?php echo $date->format('d/m/Y'); ?></br>
    <strong>Description</strong> : <?php echo $donnees['description']; ?><br /></div>
   </div>     

	<?php } ?> 

<h3>Membres : </h3> 
	
<?php

while ($donnees = $membre->fetch())
{

	$abo_artiste=liste_artiste_abo_courte($donnees['id']);
	$abo_salle=liste_salle_abo_courte($donnees['id']);
	?>
   <div class=para>
    <div class="image"><a href="index.php?page=compte&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/membres/<?php echo($donnees['photo']); ?>"></a></div><div class="presentation"><strong>Login</strong> : <a href="index.php?page=compte&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Code-postal</strong> : <?php echo $donnees['zipcode']; ?></br>
    <strong>Artistes préférés</strong> : 
<?php

while ($donnees = $abo_artiste->fetch())
{

	$donnees=info_artiste_abonne($donnees['artiste_id']);
echo ($donnees['name'].','.' '); 
}

?>
<br />
<strong>Salles préférées</strong> : 
<?php

while ($donnees = $abo_salle->fetch())
{

	$donnees=info_salle_abonne($donnees['salle_id']);
echo ($donnees['name'].','.' '); 
}

?>
<br />
</div>
   </div> 
<?php
}



?>
			

<?php
	while ($donnees = $membre->fetch()){ ?> 
	<div class=para>
	<a href="index.php?page=compte&id=<?php echo $donnees['id']; ?>"><?php echo $donnees['login']; ?> </a></br> 
</div>
	<?php } ?>

		</div>
	
	<?php include 'controleurs/footer.php' ?>		
</body>
</html>