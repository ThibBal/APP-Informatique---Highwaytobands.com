<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/accueil.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>
<body>
	<?php include 'controleurs/header.php' ?>


<div> <h1> Concerts près de chez vous </h1>

	<?php

while ($concert = $liste_salle_near->fetch())
	
{$liste=concert_salle($concert['id']);
while ($concerts = $liste -> fetch()) {?>
<center>
<a href="index.php?page=concert&id=<?php echo $concerts['id']; ?>">
<?php echo $concerts['artiste']; ?>
   	<?php echo $concerts['description']; ?>
  </br></a> </center>

<?php
}}
?>	
</div>

</body>
<?php include 'controleurs/footer.php' ?>		
</body>
</html>