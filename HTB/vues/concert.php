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
			<img width=250 src="img/artistes/<?php echo ($info_artiste['photo']); ?>"/>
			<img width=250 src="img/salles/<?php echo ($info_salle['photo']); ?>"/>
			</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Photos</h3>
			</div>

			<div class="sous_article">
			<h3>Playlist</h3>
			<div class="actu"><p></p>
			<p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita</p></div>	
			</div>			
		</div>


		<div class="article">
			<h3>Infos & Horaires</h3>
			<div class="actu"><p><?php echo ($data['artiste']); ?></p>
<p><?php echo ($data['salle']); ?></p>
			</div>	
			<center><input type="submit" value="Y participer"/></center>
				<center><iframe
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
				<li>Gégé44</li>
				<li>FrancoisLeCasque</li>
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