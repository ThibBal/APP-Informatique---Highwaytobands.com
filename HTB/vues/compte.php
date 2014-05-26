<!DOCTYPE html>
<html>


<body>
	<?php include 'vues/header.php' ?>
<link rel="stylesheet" href="css/style.css" />	

	<div id="contenu">
		<div id="banniere"><h1>Membre : <?php echo ($data['name']); ?></h1>
			<img width=300px src="img/membres/<?php echo($data['photo']); ?>">
			</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Informations</h3>
			login : <?php echo($data['login']); ?> </br>
			Adresse email : <?php echo($data['mail']); ?> </br>
			Code postal : <?php echo($data['zipcode']); ?> </br>

	<form class="formulaire" method="post" action="index.php?page=ami">			
		<center><input type="submit" value="Devinir son ami"/></center>
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
			
			</div>

			<div class="sous_article">
			<h3>Ses derniers concerts</h3>
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


<?php include 'controleurs/footer.php' ?>		
</body>
</html>