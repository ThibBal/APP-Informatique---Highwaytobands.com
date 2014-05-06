<meta charset="utf-8" />
<?php

$name=$_POST['name']; // Changement des variables pour les étudier  
$salle=$_POST['salle']; 
$artist=$_POST['artist'];
$date=$_POST['date'];
$price=$_POST['price'];
$CGU=$_POST['CGU'];





 $_SESSION['temp'] = $message;

	header ('Location: index.php?page=accueil');
	
	?>