<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/event_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'controleurs/header.php' ?>
	<?php if($data['valider']=='0'){
		echo ('<center><h1><font color="red">A valider !</h1></center>');
		?>
		<form class="formulaire" method="post" action="index.php?page=valider_concert">	
			<input type="hidden" name="id" value="<?php echo ($data['id']); ?>">		
			<center><input type="submit" value="Valider"/></center>
		</form>

		<?php } ?>	
		<div id="contenu">
			<div id="banniere"><h1><?php echo ($data['name']); ?></h1>
				<a href="index.php?page=artiste&id=<?php echo $info_artiste['id']; ?>&name=<?php echo $info_artiste['name']; ?>"><img src="img/artistes/<?php echo ($info_artiste['photo']); ?>"/></a>
				<a href="index.php?page=salle&id=<?php echo $info_salle['id']; ?>&name=<?php echo $info_salle['name']; ?>"><img src="img/salles/<?php echo ($info_salle['photo']); ?>"/></a>
			</div>	
			<div class="article">
				<h3>Informations</h3>
				<div class="actu">
					<strong>Date</strong> : <?php echo $date->format('d/m/Y'); ?></br>
					<strong>Adresse : </strong><?php echo ($info_salle['numero']); ?> <?php echo ($info_salle['voie']); ?> - <?php echo ($info_salle['zipcode']); ?>, <?php echo ($info_salle['ville']); ?>, <?php echo ($info_salle['pays']); ?></br>
					<strong>Téléphone : </strong><?php echo ($info_salle['phone']); ?></br>  
					<strong>Nombre de places : </strong><?php echo ($info_salle['capacity']); ?> places</br>
					<strong>Prix des places : </strong><?php echo ($data['price']); ?>€</br>


				</div>	

				<center><iframe
					width="100%"
					height="200px"
					frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCTQZ5rKhEnDfS2LJiU-hmV-DuCWpql02k
					&q=<?php echo ($info_salle['numero']); ?>+<?php echo ($info_salle['voie']); ?>+<?php echo ($info_salle['ville']); ?>+<?php echo ($info_salle['zipcode']); ?>+<?php echo ($info_salle['pays']); ?>&maptype=satellite">
				</iframe><br /></center>

				<?php if(isset($_SESSION['statut'])){

					if($_SESSION['statut']=='membre'){

						if($membre['membre_id']==$_SESSION['id']){ ?>

						<form name="departicipation" action="index.php?page=departicipation" method="post">
							<input type="hidden" name="concert" value="<?php echo ($data['id']); ?>">
							<center><INPUT type="submit" name="bouton" value="Ne plus y participer"></center>
						</form>	

						<?php }else{ ?>

						<form name="participation" action="index.php?page=participation" method="post">
							<input type="hidden" name="concert" value="<?php echo ($data['id']); ?>">
							<center><INPUT type="submit" name="bouton" value="Y participer"></center>
						</form>	

						<?php
					}
				}
			}
			?>

		</div>			


		<div class="article">
			<h3>Description</h3>
			<strong>Artiste :</strong> <a href="index.php?page=artiste&id=<?php echo $info_artiste['id']; ?>&name=<?php echo $info_artiste['name']; ?>"><?php echo ($info_artiste['name']); ?></a></br>
			<strong>Salle : </strong><a href="index.php?page=salle&id=<?php echo $info_salle['id']; ?>&name=<?php echo $info_salle['name']; ?>"><?php echo ($info_salle['name']); ?></a></br>
			<div class="actu"><p><?php echo ($data['description']); ?></p></div>			
		</div>


		<div class="article">
			<div class="sous_article">
				<h3>Photos</h3>
				<div class="actu3">
				<?php
				while ($photos = $photo_artiste->fetch())
				{

					?>
					<center><a href="files/images/<?php echo $photos['fichier']; ?>"><center><img width=150 src="files/images/<?php echo $photos['fichier']; ?>"></a></center></br>
					<?php

				}

				while ($photos = $photo_salle->fetch())
				{

					?>
					<center><a href="files/images/<?php echo $photos['fichier']; ?>"><center><img width=150 src="files/images/<?php echo $photos['fichier']; ?>"></a></center></br>
					<?php

				}
				?>	

			</div>
		</div>


	</div>


	<div class="article">
		<div class="sous_article2">
			<h3>Participants</h3>
			<div id="actu2">
				<ul>
					<?php
					while ($parti = $liste->fetch())
					{

						$followers=info_membre_participe($parti['membre_id']);

						?>
						<center><a href="index.php?page=compte&id=<?php echo $followers['id']; ?>"><?php echo $followers['name']; ?></a></center></br>
						<?php

					}
					?>	
				</ul>
			</div>	
		</div>

		<div class="sous_article2">
			<h3>Commentaires</h3>

			<div class="actu2">
				<?php
				while ($comment = $commentaire->fetch())
				{
					$auteur=info($comment['membre_id']);
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
							<input type="hidden" name="page" value="concert">
							<input type="hidden" name="concert_id" value="<?php echo ($data['id']); ?>">
							<input type="hidden" name="concert_name" value="<?php echo ($data['name']); ?>">
							<textarea name=commentaire rows=2 cols=30></textarea>
							<center><INPUT type="submit" name="bouton" value="Envoyer le commentaire"></center>
						</form>	

						<?php }

					}else{
						echo("</br>Inscrivez-vous pour commenter ce concert.");
					}

					?>

				</div>

			</div>
		</div>
	</div>


	<?php include 'footer.php' ?>	
</body>

</html>