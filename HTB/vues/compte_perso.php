
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
<h3>Infos personnelles</h3>
			<div class="sous_article">	
			Votre login : <?php echo($data['login']); ?> </br>
			Votre mail : <?php echo($data['mail']); ?> </br>
			Votre code postal : <?php echo($data['zipcode']); ?> </br>

	<form class="formulaire" method="post" action="index.php?page=modifier_infos">			
		<center><input type="submit" value="Modifier vos informations"/></center>
	</form>
<?php
if($data['admin']=='1'){
?>
<form class="formulaire" method="post" action="index.php?page=backoffice">			
		<center><input type="submit" value="Accéder au back-office"/></center>
	</form>
<?php }
?>

			</div>
<h3>Vos concerts</h3>
			<div class="sous_article">
			
			<div id="participants"><p></p>
			<ul>
				<?php 						
while ($concerts = $liste->fetch())
{

	$data=info_concert($concerts['concert_id']);
$dateMySQL= $data['date'];
	                    $date = new DateTime($dateMySQL); 
?>
    
	<li><a href="index.php?page=concert&id=<?php echo $data['id']; ?>"><?php echo $data['name']; ?> - <?php echo $data['salle']; ?> - <?php echo $data['artiste']; ?> - <?php echo $date->format('d/m/Y'); ?></a></li>
<?php
}
	?>		</ul>
			</div>
		</div>
					
		</div>


		<div class="article">
			<h3>Vos artistes préférés</h3>
			<div class="sous_article">
			
			<div id="participants"><p></p>
			<ul>
				<?php
while ($abo = $abo_artiste->fetch())
{

$followers=info_artiste_abonne($abo['artiste_id']);

?>
   	<center><a href="index.php?page=artiste&id=<?php echo $followers['id']; ?>&name=<?php echo $followers['name'] ?>"><?php echo $followers['name']; ?></a>
   	<form name="desabonnement" action="index.php?page=desabonnement_artiste" method="post">
					<input type="hidden" name="artiste" value="<?php echo ($followers['id']); ?>">
   <center><INPUT type="submit" name="bouton" value="Se désabonner"></center>
</form>	</center>
   	<?php

}
?>	
			</ul>
			</div>
				
			</div>
<h3>Vos salles préférées</h3>
			<div class="sous_article">
			
			<div id="participants"><p></p>
			<ul>
				<?php
while ($abo = $abo_salle->fetch())
{

$followers=info_salle_abonne($abo['salle_id']);

?>
   	<center><a href="index.php?page=salle&id=<?php echo $followers['id']; ?>&name=<?php echo $followers['name'] ?>"><?php echo $followers['name']; ?></a><form name="desabonnement" action="index.php?page=desabonnement_salle" method="post">
					<input type="hidden" name="salle" value="<?php echo ($followers['id']); ?>">
   <center><INPUT type="submit" name="bouton" value="Se désabonner"></center>
</form>	</center>
   	<?php

}
?>	
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
<h3>Infos personnelles</h3>
			<div class="sous_article">			
			Votre login : <?php echo($data2['login']); ?> </br>
				Votre page : <a href="index.php?page=artiste&id=<?php echo $data2['id']; ?>"><?php echo $data2['name']; ?></a></br>
				Votre mail : <?php echo($data2['mail']); ?> </br>
	Votre style de musique : <?php echo($data2['style']); ?> </br>
	Votre description : <?php echo($data2['description']); ?></br>


<form class="formulaire" method="post" action="index.php?page=modifier_infos">			
		<center><input type="submit" value="Modifier vos informations"/></center>
	</form>
	<form class="formulaire" method="post" action="index.php?page=creation_concert">			
		<center><input type="submit" value="Proposer un concert"/></center>
	</form>

<form class="formulaire" method="post" action="index.php?page=actualite">			
		<center><input type="submit" value="Créer une actualité"/></center>
	</form>

	<form class="formulaire" method="post" action="index.php?page=photo">			
		<center><input type="submit" value="Ajouter / Supprimer une photo"/></center>
	</form>
			</div><h3>Vos morceaux</h3>
<div class="sous_article">
			
			<?php

while ($musique = $extraits->fetch())
{
?>
    <audio src="files/musiques/<?php echo($musique['fichier']); ?>" controls></audio></br>
	<?php echo $musique['nom']; ?> - <?php echo $musique['album']; ?></br>
<?php
}
?></div>
<form method="post" class="formulaire" action="index.php?page=musique">			
		<center><input type="submit" value="Ajouter / Supprimer un morceau"/></center>
	</form>			
							
		</div>


		<div class="article"><h3>Vos concerts en attente de validation</h3>
			<div class="sous_article">
			
			<ul>
<?php 						
while ($valide = $valider->fetch())
{
	$dateMySQL= $valide['date'];
	                    $date = new DateTime($dateMySQL);

?>
    
	<li><a href="index.php?page=concert&id=<?php echo $valide['id']; ?>"><?php echo $valide['name']; ?> - <?php echo $valide['salle']; ?> - <?php echo $date->format('d/m/Y'); ?></a>
		<form class="formulaire" method="post" action="index.php?page=valider_concert">	
		<input type="hidden" name="id" value="<?php echo ($valide['id']); ?>">		
		<center><input type="submit" value="Valider"/></center>
	</form></li>
<?php
}
?>
</ul>
		</div>

			
<h3>Vos prochains concerts</h3>
			<div class="sous_article">
			
			<div id="participants"><p></p>
			<ul><?php 						
while ($concerts = $concert->fetch())
{
	$dateMySQL= $concerts['date'];
	                    $date = new DateTime($dateMySQL);

?>
    
	<li><a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $concerts['name']; ?> - <?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?> - <?php echo $date->format('d/m/Y'); ?> </a></li>
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
<h3>Infos personnelles</h3>
			<div class="sous_article">
			
			Votre login : <?php echo($data3['login']); ?> </br>
			Votre page : <a href="index.php?page=salle&id=<?php echo $data3['id']; ?>"><?php echo $data3['name']; ?></a></br>
			Votre mail : <?php echo($data3['mail']); ?> </br>
			Votre adresse : <?php echo($data3['numero']); ?> <?php echo($data3['voie']); ?>, <?php echo($data3['ville']); ?> </br>
	Votre code postal : <?php echo($data3['zipcode']); ?> </br>


<form method="post" action="index.php?page=modifier_infos">			
		<center><input type="submit" value="Modifier vos informations"/></center>
	</form>

		<form class="formulaire" method="post" action="index.php?page=creation_concert">			
		<center><input type="submit" value="Proposer un concert"/></center>
	</form>

<form method="post" action="index.php?page=actualite">			
		<center><input type="submit" value="Créer une actualité"/></center>
	</form>

	<form method="post" action="index.php?page=photo">			
		<center><input type="submit" value="Ajouter / Supprimer une photo"/></center>
	</form>
			</div>
	
		</div>


		<div class="article">
			<h3>Vos concerts en attente de validation</h3>
			<div class="sous_article">
			
<ul>
<?php 						
while ($valide = $valider->fetch())
{
	$dateMySQL= $valide['date'];
	                    $date = new DateTime($dateMySQL);

?>
    
	<li><a href="index.php?page=concert&id=<?php echo $valide['id']; ?>"><?php echo $valide['name']; ?> - <?php echo $valide['artiste']; ?> - <?php echo $date->format('d/m/Y'); ?></a>
	<form class="formulaire" method="post" action="index.php?page=valider_concert">	
		<input type="hidden" name="id" value="<?php echo ($valide['id']); ?>">		
		<center><input type="submit" value="Valider"/></center>
	</form></li>
<?php
}
?>
</ul>
		</div><h3>Vos prochains concerts</h3>
<div class="sous_article">
			
<ul>			
			<?php 						
while ($concerts = $concert->fetch())
{
	$dateMySQL= $concerts['date'];
	                    $date = new DateTime($dateMySQL);

?>
    
<li><a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $concerts['name']; ?> - <?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?> - <?php echo $date->format('d/m/Y'); ?></a></li>
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