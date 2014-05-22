<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/artiste_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<link rel="stylesheet" href="header_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>

	<?php include 'controleurs/header.php' ?>

 <!--<div class="banniere_artiste"><img width=100% src="img/<?php echo($data['banniere']); ?>   />
	</div>-->
	

	<div id="contenu">	
		<div class="article">

			<div class="sous_article">
				<h2><?php echo ($data['name']); ?></h2>
				<img width=250 src="img/artistes/<?php echo ($data['photo']); ?>"/>
				
				<form name="abonnement" action="index.php?page=abonnement_artiste" method="post">
					<input type="hidden" name="artiste" value="<?php echo ($data['id']); ?>">
   <center><INPUT type="submit" name="bouton" value="S'abonner"></center>
</form>
				
		</div>
	
			<div class="sous_article">
				<h3> Informations </h3>
				<?php echo ($data['description']); ?>
			</div>	
			
		</div>


		<div class="article2">
			<h3>Actualités</h3>
			<div class="actu" id="actu">
				<?php

while ($actualite = $actu->fetch())
{
?>
    <div class=titre_actu><?php echo($actualite['titre']); ?></div>
	<div class=date_actu><?php echo($actualite['date']); ?></div></br>
	<div class=contenu_actu><?php echo($actualite['contenu']); ?></div></br>
	
<?php
}
?>	

				<h3>Morceaux</h3>
			<?php

while ($musique = $extraits->fetch())
{
?>
    <center><audio src="files/musiques/<?php echo($musique['fichier']); ?>" controls></audio></center>
	<center><?php echo $musique['nom']; ?> - <?php echo $musique['album']; ?></center></br>
<?php
}
?>	
				</div>			
			</div>

			<div class="article">
				<div class="sous_article">
					<h3>Agenda Concert</h3>
					<div class="actu">
						<?php 						
while ($concerts = $concert->fetch())
{
?>
    
	<a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?></a></br>
<?php
}
?>			
					</div>
				</div>

				<div class="sous_article">
					<h3>Abonnés</h3>
					<div class="actu">
<?php
while ($abon = $abonnements->fetch())
{

$followers=info_membre_abonne($abon['membre_id']);

?>
   	<center><a href="index.php?page=compte&id=<?php echo $followers['id']; ?>"><?php echo $followers['name']; ?></a></center></br>
<?php

}
?>	


					</div>
				</div>
			</div>
		</div>

		
		<?php include 'footer.php' ?>		
	</body>

	</html>