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

	<form class="formulaire" method="post" action="index.php?page=modifier_infos">			
		<center><input type="submit" value="Modifier vos informations"/></center>
	</form>
			</div>

					
		</div>


		<div class="article">
			<div class="sous_article">
			<h3>Vos artistes préférés</h3>
			<div id="participants"><p></p>
			<ul>
				<?php
while ($abo = $abo_artiste->fetch())
{

$followers=info_artiste_abonne($abo['artiste_id']);

?>
   	<center><a href="index.php?page=artiste&id=<?php echo $followers['id']; ?>&name=<?php echo $followers['name'] ?>"><?php echo $followers['name']; ?></a></center></br>
<?php

}
?>	
			</ul>
			</div>
			<form class="formulaire" method="post" action="index.php?page=modifier">			
		<center><input type="submit" value="Modifier vos artistes préférés"/></center>
	</form>	
			</div>

			<div class="sous_article">
			<h3>Vos dernier concerts</h3>
			<div id="participants"><p></p>
			<ul>
				<?php 						
while ($concerts = $liste->fetch())
{

	$data=info_concert($concerts['concert_id']);

?>
    
	<li><a href="index.php?page=concert&id=<?php echo $data['id']; ?>"><?php echo $data['name']; ?> - <?php echo $data['salle']; ?> - <?php echo $data['artiste']; ?> - <?php echo $data['date']; ?></a></li>
<?php
}
	?>		</ul>
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

<form class="formulaire" method="post" action="index.php?page=modifier_infos">			
		<center><input type="submit" value="Modifier vos informations"/></center>
	</form>

<form class="formulaire" method="post" action="index.php?page=actualite">			
		<center><input type="submit" value="Créer une actualité"/></center>
	</form>

	<form class="formulaire" method="post" action="index.php?page=photo">			
		<center><input type="submit" value="Ajouter / Supprimer une photo"/></center>
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
<form method="post" class="formulaire" action="index.php?page=musique">			
		<center><input type="submit" value="Ajouter / Supprimer un morceau"/></center>
	</form>			
		</div>					
		</div>


		<div class="article">
			<div class="sous_article">
			<h3>Vos concerts en attente de validation</h3>
			<ul>
<?php 						
while ($valide = $valider->fetch())
{
?>
    
	<li><a href="index.php?page=concert&id=<?php echo $valide['id']; ?>"><?php echo $valide['name']; ?> - <?php echo $valide['salle']; ?> - <?php echo $valide['artiste']; ?> - <?php echo $valide['date']; ?></a>
		<form class="formulaire" method="post" action="index.php?page=valider_concert">	
		<input type="hidden" name="id" value="<?php echo ($valide['id']); ?>">		
		<center><input type="submit" value="Valider"/></center>
	</form></li>
<?php
}
?>
</ul>
		</div>

			

			<div class="sous_article">
			<h3>Vos dernier concerts</h3>
			<div id="participants"><p></p>
			<ul><?php 						
while ($concerts = $concert->fetch())
{
?>
    
	<li><a href="index.php?page=concert&id=<?php echo $valide['id']; ?>"><?php echo $concerts['name']; ?> - <?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?> - <?php echo $concerts['date']; ?> </a></li>
<?php
}
?>
				
			
				
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

<form method="post" action="index.php?page=actualite">			
		<center><input type="submit" value="Créer une actualité"/></center>
	</form>

	<form method="post" action="index.php?page=photo">			
		<center><input type="submit" value="Ajouter une photo"/></center>
	</form>
			</div>
	
		</div>


		<div class="article">
			<div class="sous_article">
			<h3>Vos concerts en attente de validation</h3>
<ul>
<?php 						
while ($valide = $valider->fetch())
{
?>
    
	<li><a href="index.php?page=concert&id=<?php echo $valide['id']; ?>"><?php echo $valide['name']; ?> - <?php echo $valide['salle']; ?> - <?php echo $valide['artiste']; ?> - <?php echo $valide['date']; ?>
	<form class="formulaire" method="post" action="index.php?page=valider_concert">	
		<input type="hidden" name="id" value="<?php echo ($valide['id']); ?>">		
		<center><input type="submit" value="Valider"/></center>
	</form></li>
<?php
}
?>
</ul>
		</div>
<div class="sous_article">
			<h3>Vos dernier concerts</h3>
<ul>			
			<?php 						
while ($concerts = $concert->fetch())
{
?>
    
<li><a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $concerts['name']; ?> - <?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?> - <?php echo $concerts['date']; ?></li>
<?php
}
?>
			</ul>
		
		</div>
		</div>
	</div>
		<?php } ?>	

<?php include 'controleurs/footer.php' ?>		
</body>
</html>