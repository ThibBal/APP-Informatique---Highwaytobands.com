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
			</div>

			<div class="sous_article">
			<h3>Concerts</h3>
			<div id="calendrier"><p></p>
			<ul>
				<li>15/03/14 : Bruno Mars</li>
				<li>16/03/14 : Imagine Dragons</li>
				<li>18/03/14 : The Who</li>
				<li>20/03/14 : Bastille</li>
				<li>25/03/14 : Oasis</li>
				<li>31/03/14 : Supertramp</li>
				<li>01/04/14 : The Rolling Stones</li>
				<li>10/04/14 : Mika</li>
				<li>15/04/14 : Stromae</li>
			</ul>
			</div>	
			</div>			
		</div>


		<div class="article">
			<h3>Description</h3>
			<div class="actu"><p><?php echo ($data['description']); ?></p>

			</div>	
			<form name="abonnement" action="index.php?page=abonnement_salle" method="post">
					<input type="hidden" name="salle" value="<?php echo ($data['id']); ?>">
   <center><INPUT type="submit" name="bouton" value="S'abonner"></center>
</form>
					
		</div>

		<div class="article">
			<h3>Informations</h3>
			<div class="actu">
			<p>Adresse : <?php echo ($data['adress']); ?></p>
			<p>Code-postal : <?php echo ($data['zipcode']); ?></p>
			<p>Horaires : <?php echo ($data['hours']); ?></p>
			<p>Téléphone : <?php echo ($data['phone']); ?></p>
			<p>Capacité : <?php echo ($data['capacity']); ?> places</p>
			<center><iframe
  width="270"
  height="240"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCTQZ5rKhEnDfS2LJiU-hmV-DuCWpql02k
    &q=<?php echo ($data['adress']); ?>+<?php echo ($data['zipcode']); ?>">
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
			<div class="actu">
			<p></p>	
			</div>
		</div>
		</div>
	</div>

	
		
</body>
<?php include 'footer.php' ?>
</html>