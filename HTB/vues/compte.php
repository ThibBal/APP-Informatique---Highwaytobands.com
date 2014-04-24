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
	
	
<div id="contenu">
		<div id="banniere"><h1><?php echo ($_SESSION['login']); ?></h1>
			<img width=200px src="img/<?php echo($data['photo']); ?>">
			</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Infos personnelles</h3>
			Votre mail : <?php echo($data['mail']); ?> </br>
	Votre code postal : <?php echo($data['zipcode']); ?> </br>
	<form method="post" action="index.php?page=modifier">			
		<center><input type="submit" value="Modifier vos informations"/></center>
	</form>
			</div>

					
		</div>


		

		

		<div class="article">
			<div class="sous_article">
			<h3>Vos artistes préférés</h3>
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
	

<?php include 'controleurs/footer.php' ?>		
</body>
</html>