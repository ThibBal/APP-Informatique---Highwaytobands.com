<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/accueil.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'controleurs/header.php' ?>
	<?php 
		if(!isset($_SESSION['statut'])){ ?>
	<a href="index.php?page=inscription"><div id="inscription">
		Inscrivez-vous !
		<ul>
			<li>Abonnez-vous à vos artistes et salles favoris</li>
			<li>Découvrez les concerts proches de chez vous</li>
			<li>Discutez avec une communauté de passionnés</li>
		</ul>
	</div></a>
	<div id="contenu">
		<div class="article">
			<h1 class="titre">Fil d'actualité</h1>
			<div class="sous_article">

			<?php
	while ($actualite = $actu->fetch())
	{   
		$dateMySQL= $actualite['date'];
	                    $date = new DateTime($dateMySQL); 
	?>
	    <div class=titre_actu><?php echo($actualite['titre']); ?></div>
	    par <a href="index.php?page=artiste&name=<?php echo $actualite['artiste_name']; ?>&id=<?php echo $actualite['artiste_id']; ?>"><?php echo($actualite['artiste_name']); ?></a>
	    <a href="index.php?page=salle&name=<?php echo $actualite['salle_name']; ?>&id=<?php echo $actualite['salle_id']; ?>"><?php echo($actualite['salle_name']); ?></a>
		<div class=date_actu><?php  echo $date->format('d/m/Y'); ?></div></br>
		<div class=contenu_actu><?php echo($actualite['contenu']); ?></div></br>
	<?php } ?>	
		</div>
	</div>


		<div class="article">
			<h1 class="titre">Concerts à venir</h1>
			<div class="sous_article">
				<?php
while ($concerts = $concert->fetch())
{
		$dateMySQL= $concerts['date'];
                    $date = new DateTime($dateMySQL); 
?>
    
	<div id="concert"><a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $date->format('d/m/Y'); ?> - <?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?> - <?php echo $concerts['name']; ?></a></div>
<?php
}
?>			
		</div>
	</div>

		<div class="article3">
			<h1 class="titre">Photos récentes</h1>
			<div class="sous_article">
				<ul>
<?php 						
while ($photos = $photo->fetch())
{ 
	if($photos['artiste_id']==''){
		?>
	<li><a href="index.php?page=salle&name=<?php echo $photos['salle']; ?>&id=<?php echo $photos['salle_id']; ?>"><img width=150 src="files/images/<?php echo $photos['fichier']; ?>"><?php echo $photos['name']; ?></a></li>
	<?php }
	
	if($photos['salle_id']==''){
		?>
	<li><a href="index.php?page=artiste&name=<?php echo $photos['artiste']; ?>&id=<?php echo $photos['artiste_id']; ?>"><img width=150 src="files/images/<?php echo $photos['fichier']; ?>"><?php echo $photos['name']; ?></a></li>
	<?php	
	}
}
?>		
</ul>
</div>
		</div>
	</div>
	</div>

	<?php }else{ 

if($_SESSION['statut']=='membre'){

	// Accueil quand l'utilisateur est connecté ?>
<div id="contenu">
		<div class="article">
			<h1 class="titre">Fil d'actualité</h1>
			<div class="sous_article">
			<?php
	
	while ($artiste = $liste_salle->fetch())
	{   
		$actu=liste_actu_salle($artiste['salle_id']);
		while ($actualite = $actu->fetch())
	{ 
		$dateMySQL= $actualite['date'];
	                    $date = new DateTime($dateMySQL); 
	?>
	    <div class=titre_actu><?php echo($actualite['titre']); ?></div>
	    par <a href="index.php?page=artiste&name=<?php echo $actualite['artiste_name']; ?>&id=<?php echo $actualite['artiste_id']; ?>"><?php echo($actualite['artiste_name']); ?></a>
	    <a href="index.php?page=salle&name=<?php echo $actualite['salle_name']; ?>&id=<?php echo $actualite['salle_id']; ?>"><?php echo($actualite['salle_name']); ?></a>
		<div class=date_actu><?php  echo $date->format('d/m/Y'); ?></div></br>
		<div class=contenu_actu><?php echo($actualite['contenu']); ?></div></br>
		
<?php
}

}
?>
			<?php
	
	while ($artiste = $liste_artiste->fetch())
	{   
		$actu=liste_actu_artiste($artiste['artiste_id']);
		while ($actualite = $actu->fetch())
	{ 
		$dateMySQL= $actualite['date'];
	                    $date = new DateTime($dateMySQL); 
	?>
	    <div class=titre_actu><?php echo($actualite['titre']); ?></div>
	    par <a href="index.php?page=artiste&name=<?php echo $actualite['artiste_name']; ?>&id=<?php echo $actualite['artiste_id']; ?>"><?php echo($actualite['artiste_name']); ?></a>
	    <a href="index.php?page=salle&name=<?php echo $actualite['salle_name']; ?>&id=<?php echo $actualite['salle_id']; ?>"><?php echo($actualite['salle_name']); ?></a>
		<div class=date_actu><?php  echo $date->format('d/m/Y'); ?></div></br>
		<div class=contenu_actu><?php echo($actualite['contenu']); ?></div></br>
		
<?php
}

}
?>
		</div>
	</div>


		<div class="article">
			<h1 class="titre">Concerts à venir</h1>
			<div class="sous_article">
				<?php
				
while ($con = $liste_concert->fetch())
{
	$concerts=info_concert($con['concert_id']);
		$dateMySQL= $concerts['date'];
                    $date = new DateTime($dateMySQL); 
?>
    
	<div id="concert"><a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $date->format('d/m/Y'); ?> - <?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?> - <?php echo $concerts['name']; ?></a></div>

<?php	
}
?>			
		</div>
	</div>

		<div class="article3">
			<h1 class="titre">Photos récentes</h1>
			<div class="sous_article">
				<ul>
<?php 						
while ($photos = $photo->fetch())
{ 
	if($photos['artiste_id']==''){
		?>
	<li><a href="index.php?page=salle&name=<?php echo $photos['salle']; ?>&id=<?php echo $photos['salle_id']; ?>"><img width=150 src="files/images/<?php echo $photos['fichier']; ?>"><?php echo $photos['name']; ?></a></li>
	<?php }
	
	if($photos['salle_id']==''){
		?>
	<li><a href="index.php?page=artiste&name=<?php echo $photos['artiste']; ?>&id=<?php echo $photos['artiste_id']; ?>"><img width=150 src="files/images/<?php echo $photos['fichier']; ?>"><?php echo $photos['name']; ?></a></li>
	<?php	
	}

?>  

<?php
}
?>		
</ul>
</div>
		</div>
	</div>
	</div>

<?php		
}

if($_SESSION['statut']=='salle'){
?>
	<div id="contenu">
		<div class="article2">
			<h1 class="titre">Vos prochains concerts</h1>
			<div class="sous_article">
<?php
				
while ($con = $concert->fetch())
{
	$concerts=info_concert($con['id']);
		$dateMySQL= $concerts['date'];
                    $date = new DateTime($dateMySQL); 
?>
    
	<div id="concert"><a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $date->format('d/m/Y'); ?> - <?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?> - <?php echo $concerts['name']; ?></a></div>

<?php	
}
?>		




						</div>
	</div>
		<div class="article2">
			<h1 class="titre">Vos photos</h1>
			<div class="sous_article">
				<ul>
<?php 						
while ($photos = $photo->fetch())
{ 
?>
	<li><a href="index.php?page=salle&name=<?php echo $photos['salle']; ?>&id=<?php echo $photos['salle_id']; ?>"><img width=300 src="files/images/<?php echo $photos['fichier']; ?>"><?php echo $photos['name']; ?></a></li>
<?php
}
?>		
</ul>
						</div>
	</div>

	</div>


<?php }

if($_SESSION['statut']=='artiste'){
?>
	<div id="contenu">
		<div class="article2">
			<h1 class="titre">Vos prochains concerts</h1>
			<div class="sous_article">
<?php
				
while ($con = $concert->fetch())
{
	$concerts=info_concert($con['id']);
		$dateMySQL= $concerts['date'];
                    $date = new DateTime($dateMySQL); 
?>
    
	<div id="concert"><a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>"><?php echo $date->format('d/m/Y'); ?> - <?php echo $concerts['salle']; ?> - <?php echo $concerts['artiste']; ?> - <?php echo $concerts['name']; ?></a></div>

<?php	
}
?>		




						</div>
	</div>
		<div class="article2">
			<h1 class="titre">Vos photos</h1>
			<div class="sous_article">
				<ul>
<?php 						
while ($photos = $photo->fetch())
{ 
?>
	<li><a href="index.php?page=artiste&name=<?php echo $photos['artiste']; ?>&id=<?php echo $photos['artiste_id']; ?>"><img width=300 src="files/images/<?php echo $photos['fichier']; ?>"><?php echo $photos['name']; ?></a></li>
<?php
}
?>		
</ul>
						</div>
	</div>

	</div>


<?php }
}
?>	

<?php include 'controleurs/footer.php' ?>		
</body>
</html>