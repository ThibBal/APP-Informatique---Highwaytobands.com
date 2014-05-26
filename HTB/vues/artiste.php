<!DOCTYPE html>
<?php include 'controleurs/header.php' ?>
<html>
<body>
<link rel="stylesheet" href="css/artiste_style.css" />
	<div id="contenu">	
		<div class="article">

			<div class="sous_article">
				<h2><?php echo ($data['name']); ?></h2>
				<img width=150 src="img/artistes/<?php echo ($data['photo']); ?>"/>
				
				<?php if(isset($_SESSION['statut'])){

if($_SESSION['statut']=='membre'){

if($membre['membre_id']==$_SESSION['id']){ ?>

<form name="desabonnement" action="index.php?page=desabonnement_artiste" method="post">
					<input type="hidden" name="artiste" value="<?php echo ($data['id']); ?>">
   <center><INPUT type="submit" name="bouton" value="Se désabonner"></center>
</form>	

<?php }else{ ?>

<form name="abonnement" action="index.php?page=abonnement_artiste" method="post">
					<input type="hidden" name="artiste" value="<?php echo ($data['id']); ?>">
   <center><INPUT type="submit" name="bouton" value="S'abonner"></center>
</form>	

<?php
}
}
}
?>
				
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
</div>
<h3>Morceaux</h3>			
<div class="actu">
				
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