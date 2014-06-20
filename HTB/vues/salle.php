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
			<div class="sous_article1">
			<h3>Description</h3>
			<div class="actu"><p>
				<?php echo ($data['description']); ?></p>

			
			<?php if(isset($_SESSION['statut'])){

				if($_SESSION['statut']=='artiste'){ ?>
						<form class="formulaire" method="post" action="index.php?page=creation_concert">			
		<center><input type="submit" value="Proposer un concert"/></center>
	</form>
			<?php	} ?>


<?php
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
		</div>
		<div class="sous_article1">
			<h3>Concerts</h3>
			<div class="actu"><p></p>
			<ul>
				<?php 						
while ($concerts = $concert->fetch())
{
?>
    
	<li><a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $concerts['name']; ?> - <?php echo $concerts['artiste']; ?></a></li></br>
<?php
}
?>
			</ul>
			</div>	
			</div>	
<div class="sous_article1">
			<h3>Photos de la salle</h3>
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
		

	</div>

		<div class="article3">
			

		<div class="sous_article">
			<h3>Informations</h3>
			<div class="actu4">
			<strong>Adresse : </strong><?php echo ($data['numero']); ?> <?php echo ($data['voie']); ?> - <?php echo ($data['zipcode']); ?>, <?php echo ($data['ville']); ?>, <?php echo ($data['pays']); ?></br>
			<strong>Horaires : </strong><?php echo ($data['hours']); ?></br>
			<strong>Téléphone : </strong><?php echo ($data['phone']); ?></br>  
			<strong>Capacité : </strong><?php echo ($data['capacity']); ?> places</br>

			<center><iframe
  width="100%"
  height="200px"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCTQZ5rKhEnDfS2LJiU-hmV-DuCWpql02k
    &q=<?php echo ($data['numero']); ?>+<?php echo ($data['voie']); ?>+<?php echo ($data['ville']); ?>+<?php echo ($data['zipcode']); ?>+<?php echo ($data['pays']); ?>&maptype=satellite">
</iframe><br /></center>

			</div>	
		</div>	

		<div class="sous_article">
				<h3>Actualités</h3>
		<div class="actu">
				<?php

while ($actualite = $actu->fetch())
{
		$dateMySQL= $actualite['date'];
	                    $date = new DateTime($dateMySQL)

?>
    <div class=titre_actu><?php echo($actualite['titre']); ?></div>
	<div class=date_actu><?php echo $date->format('d/m/Y'); ?></div>
	<div class=contenu_actu><?php echo($actualite['contenu']); ?></div></br>
	
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
	</div>

	
		
</body>
<?php include 'footer.php' ?>
</html>