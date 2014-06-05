<!DOCTYPE html>
<html>

<?php include 'controleurs/header.php' ?>
<body>

<link rel="stylesheet" href="css/style.css" />	

	<div id="contenu">
		<div id="banniere"><h1>Membre : <?php echo ($data['name']); ?></h1>
			<img width=300px src="img/membres/<?php echo($data['photo']); ?>">
			</div>	
		<div class="article">
<h3>Informations</h3>
			<div class="sous_article">
			
			login : <?php echo($data['login']); ?> </br>
			Adresse email : <?php echo($data['mail']); ?> </br>
			Code postal : <?php echo($data['zipcode']); ?> </br>

			</div>
				<h3>Ses concerts</h3>
			<div class="sous_article">
			
			<div id="participants">
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


		

		

		<div class="article">
					<h3>Ses artistes préférés</h3>
					<div class="sous_article">
	
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
			
			</div>
<h3>Ses salles préférées</h3>
					<div class="sous_article">
	
			<div id="participants"><p></p>
			<ul>
				<?php
while ($abo = $abo_salle->fetch())
{

$followers=info_salle_abonne($abo['salle_id']);

?>
   	<center><a href="index.php?page=salle&id=<?php echo $followers['id']; ?>&name=<?php echo $followers['name'] ?>"><?php echo $followers['name']; ?></a></center></br>
<?php

}
?>	
			</ul>
			</div>
			
			</div>

		</div>
	</div>


<?php include 'controleurs/footer.php' ?>		
</body>
</html>