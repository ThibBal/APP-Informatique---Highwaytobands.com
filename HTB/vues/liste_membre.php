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
		<div id="banniere"><h1>Liste des membres inscrits</h1>			
		</div>	
	<div class="liste">

<?php

while ($donnees = $membres->fetch())
{
?>
    <p>
    <strong>Login</strong> : <a href="index.php?page=compte&id=<?php echo $donnees['id']; ?>"><?php echo $donnees['login']; ?></a>
    <strong>Code-postal</strong> : <?php echo $donnees['zipcode']; ?><br />
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