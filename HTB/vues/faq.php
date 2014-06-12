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