<!DOCTYPE html>
<?php include 'controleurs/header.php' ?>
<html>
<body>
<link rel="stylesheet" href="css/artiste_style.css" />
	<div id="contenu">	
		<div class="article">

			<div class="sous_article">

				<h2><?php echo ($data['name']); ?></h2>
				<center><img id='profil' width=150 src="img/artistes/<?php echo ($data['photo']); ?>"/></center>
				
				<div class="abo"><?php if(isset($_SESSION['statut'])){

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
		</div>
	
			<div class="sous_article">
				<h3> Informations </h3>
					<div class="actu">
				<?php echo ($data['description']); ?>
			</div>	
			
		</div>
</div>

		<div class="article2">
			
			<div class="sous_article">
	<h3>Actualités</h3>
		<div class="actu">
				<?php

while ($actualite = $actu->fetch())
{
?>
    <div class=titre_actu><?php echo($actualite['titre']); ?></div>
	<div class=date_actu><?php echo($actualite['date']); ?></div>
	<div class=contenu_actu><?php echo($actualite['contenu']); ?></div></br>
	
<?php
}
?>	
</div>
</div>
<div class="sous_article">
	<h3>Concert</h3>
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
			</div>

			<div class="article">
				

				<div class="sous_article">
					<h3>Photos</h3>
					<div class="actu">
<?php
while ($photos = $photo->fetch())
{

?>
   	<center><a href="files/images/<?php echo $photos['fichier']; ?>"><center><img width=150 src="files/images/<?php echo $photos['fichier']; ?>"></a></center></br>
<?php

}
?>	


					</div>
</div>
					
					<div class="sous_article">	
						
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

			</div>

<div class="article">
				

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
					
					<div class="sous_article">
						<h3>Commentaires</h3>
					
							<div class="actu2">
<?php
while ($comment = $commentaire->fetch())
{
$auteur=info_membre_abonne($comment['membre_id']);
?>
<?php echo $auteur['name']; ?> : <?php echo $comment['contenu']; ?></br>
<?php
}
?>	
</div>
<div class="ecrire">
<?php if(isset($_SESSION['statut'])){

if($_SESSION['statut']=='membre'){

?> 
<form name="comment" action="index.php?page=commentaire" method="post">
	<input type="hidden" name="page" value="artiste">
					<input type="hidden" name="artiste_id" value="<?php echo ($data['id']); ?>">
					<input type="hidden" name="artiste_name" value="<?php echo ($data['name']); ?>">
					<textarea name=commentaire rows=2 cols=30></textarea>
   <center><INPUT type="submit" name="bouton" value="Envoyer le commentaire"></center>
</form>	

<?php }

}else{
		echo("</br>Inscrivez-vous commenter cet artiste !");
}

?>

</div>

		</div>
				</div>
</div>
			</div>
					
									</div>
		
		<?php include 'footer.php' ?>		
	</body>

	</html>