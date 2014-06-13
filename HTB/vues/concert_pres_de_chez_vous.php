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
while ($concert = $liste_concert_near->fetch())
{
?>
<center>
<a href="index.php?page=concert&id=<?php echo $concert['id']; 
<?php echo "Artiste:" $concert['artiste']; ?>
   	<?php echo $concert['description']; ?></center></br></a>
<?php
}
?>	
</div>

</body>
<?php include 'controleurs/footer.php' ?>		
</body>
</html>