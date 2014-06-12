<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/salle_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'controleurs/header.php' ?>


	<div id="contenu">
		<div id="banniere"><h1><?php echo ($data['name']); ?></h1>
			<img width=300 src="img/salles/<?php echo($data['photo']); ?>">
		</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Photos de la salle</h3>
			<?php
while ($photos = $photo->fetch())
{

?>
   	<center><a href="files/images/<?php echo $photos['fichier']; ?>"><center><img width=150 src="files/images/<?php echo $photos['fichier']; ?>"></a></center></br>
<?php

}
?>	
			</div>

			<div class="sous_article">
			<h3>Concerts</h3>
			<div id="calendrier"><p></p>
			<ul>
				<?php 						
while ($concerts = $concert->fetch())
{
?>
    
	<li><a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?></a></li></br>
<?php
}
?>
			</ul>
			</div>	
			</div>			
		</div>


		<div class="article">
			<h3>Description</h3>
			<div class="actu"><p><?php echo ($data['description']); ?></p>

			</div>	
			<?php if(isset($_SESSION['statut'])){

if($_SESSION['statut']=='membre'){

if($membre['membre_id']==$_SESSION['id']){ ?>

<form name="desabonnement" action="index.php?page=desabonnement_salle" method="post">
					<input type="hidden" name="salle" value="<?php echo ($data['id']); ?>">
   <center><INPUT type="submit" name="bouton" value="Se désabonner"></center>
</form>	

<?php }else{ ?>

<form name="abonnement" action="index.php?page=abonnement_salle" method="post">
					<input type="hidden" name="salle" value="<?php echo ($data['id']); ?>">
   <center><INPUT type="submit" name="bouton" value="S'abonner"></center>
</form>	

<?php
}
}
}
?>
					
		</div>

		<div class="article">
			<h3>Informations</h3>
			<div class="actu">
			<p>Adresse : <?php echo ($data['numero']); ?> <?php echo ($data['voie']); ?> - <?php echo ($data['zipcode']); ?>, <?php echo ($data['ville']); ?>, <?php echo ($data['pays']); ?></p>
			<p>Horaires : <?php echo ($data['hours']); ?></p>
			<p>Téléphone : <?php echo ($data['phone']); ?></p>
			<p>Capacité : <?php echo ($data['capacity']); ?> places</p>
			<center><iframe
  width="100%"
  height="200px"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCTQZ5rKhEnDfS2LJiU-hmV-DuCWpql02k
    &q=<?php echo ($data['numero']); ?>+<?php echo ($data['voie']); ?>+<?php echo ($data['ville']); ?>+<?php echo ($data['zipcode']); ?>+<?php echo ($data['pays']); ?>&maptype=satellite">
</iframe><br /></center>

		</div>			
		</div>

		<div class="article">
			<div class="sous_article">
			
			<div class="actu">

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
	<input type="hidden" name="page" value="salle">
					<input type="hidden" name="salle_id" value="<?php echo ($data['id']); ?>">
					<input type="hidden" name="salle_name" value="<?php echo ($data['name']); ?>">
					<textarea name=commentaire rows=2 cols=30></textarea>
   <center><INPUT type="submit" name="bouton" value="Envoyer le commentaire"></center>
</form>	

<?php }

}else{
		echo("</br>Inscrivez-vous pour commenter cette salle !");
}

?>

</div>

		</div>
		</div>
	</div>

	
		
</body>
<?php include 'footer.php' ?>
</html>