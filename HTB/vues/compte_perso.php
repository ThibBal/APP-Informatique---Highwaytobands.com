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
	
<?php if($_SESSION['statut']=='membre'){ ?>

	<div id="contenu">
		<div id="banniere"><h1>Membre : <?php echo ($data['name']); ?></h1>
			<img width=200px src="img/membres/<?php echo($data['photo']); ?>">
			</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Infos personnelles</h3>
			Votre login : <?php echo($data['login']); ?> </br>
			Votre mail : <?php echo($data['mail']); ?> </br>
			Votre code postal : <?php echo($data['zipcode']); ?> </br>

	<form method="post" action="index.php?page=modifier_infos">			
		<center><input type="submit" value="Modifier vos informations"/></center>
	</form>
			</div>

					
		</div>


		

		

		<div class="article">
			<div class="sous_article">
			<h3>Vos artistes préférés</h3>
			<div id="participants"><p></p>
			<ul>
				
				<li>Bruno Mars</li>
				<li>Imagine Dragons</li>
				<li>The Who</li>
				<li>Bastille</li>
				<li>Stromae</li>
			</ul>
			</div>
			<form method="post" action="index.php?page=modifier">
			
		<center><input type="submit" value="Modifier vos artistes préférés"/></center>
	</form>	
			</div>

			<div class="sous_article">
			<h3>Vos dernier concerts</h3>
			<div id="participants"><p></p>
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
	</div>
		<?php } ?>	

		<?php if($_SESSION['statut']=='artiste'){ ?>

	<div id="contenu">
		<div id="banniere"><h1>Artiste : <?php echo ($data2['name']); ?></h1>
			<img width=200px src="img/artistes/<?php echo($data2['photo']); ?>">
			</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Infos personnelles</h3>
			Votre login : <?php echo($data2['login']); ?> </br>
			Votre mail : <?php echo($data2['mail']); ?> </br>
	Votre style de musique : <?php echo($data2['style']); ?> </br>

<form method="post" action="index.php?page=modifier_infos">			
		<center><input type="submit" value="Modifier vos informations"/></center>
	</form>
			</div>
<div class="sous_article">
			<h3>Vos morceaux</h3>
			<?php

while ($musique = $extraits->fetch())
{
?>
    <audio src="files/musiques/<?php echo($musique['fichier']); ?>" controls></audio></br>
	<?php echo $musique['nom']; ?> - <?php echo $musique['album']; ?></br>
<?php
}
?>
<form method="post" action="index.php?page=musique">			
		<center><input type="submit" value="Ajouter / Supprimer un morceau"/></center>
	</form>			
		</div>

<div class="sous_article">
			<h3>Vos messages</h3>
			<div id="participants"><p></p>
			<ul>
				
				<li>Bruno Mars</li>
				
			</ul>
			</div>
			<form method="post" action="index.php?page=modifier">
			
		<center><input type="submit" value="Valider"/></center>
	</form>	
			</div>		
					
		</div>


		

		

		<div class="article">
			<div class="sous_article">
			<h3>Vos concerts en attente de validation</h3>
<?php 						
while ($valide = $valider->fetch())
{
?>
    
	<?php echo $valide['salle']; ?> - <?php echo $valide['artiste']; ?></br>
<?php
}
?>

		</div>

			

			<div class="sous_article">
			<h3>Vos dernier concerts</h3>
			<div id="participants"><p></p>
			<?php 						
while ($concerts = $concert->fetch())
{
?>
    
	<?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?></br>
<?php
}
?><ul>
				
				<li>15/03/14 : Bruno Mars</li>
				<li>16/03/14 : Imagine Dragons</li>
				
			</ul>
			</div>
		</div>
		</div>
	</div>
		<?php } ?>	

		<?php if($_SESSION['statut']=='salle'){ ?>

	<div id="contenu">
		<div id="banniere"><h1>Salle : <?php echo ($data3['name']); ?></h1>
			<img width=200px src="img/salles/<?php echo($data3['photo']); ?>">
			</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Infos personnelles</h3>
			Votre login : <?php echo($data3['login']); ?> </br>
			Votre mail : <?php echo($data3['mail']); ?> </br>
	Votre code postal : <?php echo($data3['zipcode']); ?> </br>

<form method="post" action="index.php?page=modifier_infos">			
		<center><input type="submit" value="Modifier vos informations"/></center>
	</form>
			</div>
	
		</div>


		

		

		<div class="article">
			<div class="sous_article">
			<h3>Vos concerts en attente de validation</h3>
<?php 						
while ($valide = $valider->fetch())
{
?>
    
	<?php echo $valide['salle']; ?> - <?php echo $valide['artiste']; ?></br>
<?php
}
?>

		</div>
<div class="sous_article">
			<h3>Vos dernier concerts</h3>
			
			<?php 						
while ($concerts = $concert->fetch())
{
?>
    
	<?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?></br>
<?php
}
?><ul>
				
				<li>15/03/14 : Bruno Mars</li>
				
			</ul>
		
		</div>
		</div>
	</div>
		<?php } ?>	

<?php include 'controleurs/footer.php' ?>		
</body>
</html>