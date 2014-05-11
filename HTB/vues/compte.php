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
		<div id="banniere"><h1>Membre : <?php echo ($data['name']); ?></h1>
			<img width=300px src="img/membres/<?php echo($data['photo']); ?>">
			</div>	
		<div class="article">

			<div class="sous_article">
			<h3>Informations</h3>
			login : <?php echo($data['login']); ?> </br>
			Adresse email : <?php echo($data['mail']); ?> </br>
			Code postal : <?php echo($data['zipcode']); ?> </br>

	<form method="post" action="index.php?page=ami">			
		<center><input type="submit" value="Devinir son ami"/></center>
	</form>
			</div>
					
		</div>


		

		

		<div class="article">
			<div class="sous_article">
			<h3>Ses artistes préférés</h3>
			<div id="participants"><p></p>
			<ul>
				
				<li>Bruno Mars</li>
				<li>Imagine Dragons</li>
				<li>The Who</li>
				<li>Bastille</li>
				<li>Stromae</li>
			</ul>
			</div>
			
			</div>

			<div class="sous_article">
			<h3>Ses derniers concerts</h3>
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