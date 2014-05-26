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


	<div id="contenu">
		<div id="banniere"><h1><?php echo ($data['name']); ?></h1>
			<img src="img/artistes/<?php echo ($info_artiste['photo']); ?>"/>
			<img src="img/salles/<?php echo ($info_salle['photo']); ?>"/>
			</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Photos</h3>
			</div>

			<div class="sous_article">
			<h3>Playlist</h3>
			<div class="actu"><p></p>
		</div>	
			</div>			
		</div>


		<div class="article">
			<h3>Infos & Horaires</h3>
			<div class="actu">
<a href="index.php?page=artiste&id=<?php echo $info_artiste['id']; ?>&name=<?php echo $info_artiste['name']; ?>"><?php echo ($data['artiste']); ?></a>
<a href="index.php?page=salle&id=<?php echo $info_salle['id']; ?>&name=<?php echo $info_salle['name']; ?>"><?php echo ($data['salle']); ?></a>

			</div>	
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

<iframe
  width="270"
  height="240"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCTQZ5rKhEnDfS2LJiU-hmV-DuCWpql02k
    &q=<?php echo ($info_salle['adress']); ?>+<?php echo ($info_salle['zipcode']); ?>">
</iframe><br /></center>
		</div>

		<div class="article">
			<h3>Description</h3>
			<div class="actu"><p><?php echo ($data['description']); ?></p></div>			
		</div>

				



		<div class="article">
			<div class="sous_article">
			<h3>Ils y participent</h3>
			<div id="participants"><p></p>
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

			<div class="sous_article">
			<h3>Commentaires</h3>
			<div class="actu">
			<p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita</p>	
			</div>
		</div>
		</div>
	</div>

	
	<?php include 'footer.php' ?>	
</body>

</html>