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
			<img width=450 src="img/<?php echo($data['photo']); ?>">
		</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Photos de la salle</h3>
			</div>

			<div class="sous_article">
			<h3>Concerts à venir</h3>
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
			<h3>Infos</h3>
			<div class="actu"><p><?php echo ($data['description']); ?></p>

			<a id="plan" href="img/olympia.png"><img width=250 src="img/olympia.png"></a></div>	
			<center><input type="submit" value="S'abonner"/></center>
				
		</div>

		<div class="article">
			<h3>Horaires</h3>
			<div class="actu"><p><a href="#">Article : Une actualité top du top</a></p>
			<p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita</p></div>			
		</div>

		<div class="article">
			<div class="sous_article">
			<h3>Récents concerts</h3>
			<div class="actu"><p></p>
			<p>Cumque pertinacius ut legum gnarus accusatorem flagitaret atque sollemnia, doctus id Caesar libertatemque superbiam ratus tamquam obtrectatorem audacem excarnificari praecepit, qui ita</p>
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

	
		
</body>
<?php include 'footer.php' ?>
</html>