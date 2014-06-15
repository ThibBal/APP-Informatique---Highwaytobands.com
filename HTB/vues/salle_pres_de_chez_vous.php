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
	<?php include 'controleurs/header.php' ?>


<div> <h1> Concerts près de chez vous </h1>

	<?php

while ($concert = $liste_salle_near->fetch())
	
{
	$liste=concert_salle($concert['id']);

while ($donnees = $liste -> fetch())
{
 $dateMySQL= $donnees['date'];
 $date = new DateTime($dateMySQL);

 	?>


    <div class=para>
    <div class="image"><a href="index.php?page=concert&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><img  src="img/photo1.jpg"></a></div><div class="presentation"><strong>Nom du concert</strong> : <a href="index.php?page=concert&id=<?php echo $donnees['id']; ?>&name=<?php echo $donnees['name']; ?>"><?php echo $donnees['name']; ?></a></br>
    <strong>Artiste</strong> : <?php echo $donnees['artiste']; ?></br>
    <strong>Salle</strong> : <?php echo $donnees['salle']; ?></br>
    <strong>Date</strong> : <?php echo $date->format('d/m/Y'); ?></br>
    <strong>Description</strong> : <?php echo $donnees['description']; ?><br /></div>
   </div>


<?php
}}
?>	
</div>

</body>
<?php include 'controleurs/footer.php' ?>		
</body>
</html>