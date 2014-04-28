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
		<div id="banniere"><h1>Liste des artistes inscrits</h1>			
		</div>	

<div class="liste">

<?php

while ($artiste = $artistes->fetch())
{
?>
    <p>
    <strong>Login</strong> : <?php echo $artiste['login']; ?>
    <strong>Nom</strong> : <?php echo $artiste['name']; ?>
    <strong>Style</strong> : <?php echo $artiste['style']; ?>
    <strong>Description</strong> : <?php echo $artiste['description']; ?><br />
   </p>
<?php
}



?>
			</div>
		</div>



		</div>
	
	

<?php include 'controleurs/footer.php' ?>		
</body>
</html>