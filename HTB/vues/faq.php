<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/faq.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'controleurs/header.php' ?>
	
	<div id="contenu">


		<div class="article">
			<p class="grostitre">FAQ</p>
Bienvenue sur la Foire aux Questions de Highway to Bands.
Vous trouverez dans cette rubriques les questions les plus récurrentes posées concernant notre site Internet.
N'hésitez-pas à nous contacter si vous avez besoin de renseignements supplémentaires concernant l'utilisation de Highway to Bands.

			<?php while ($questions = $faq->fetch())
	{ ?>

	<h2> <?php echo($questions['question']); ?></h2>
	<h4> <?php echo($questions['reponse']); ?></h4>
<?php
} ?>
		</div>

		</div>

	</div>

	
	<?php include 'controleurs/footer.php' ?>		
</body>
</html>