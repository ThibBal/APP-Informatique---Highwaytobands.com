<?php

$artiste_id=$_POST['artiste']; // Changement des variables pour les étudier 
$membre_id=$_SESSION['id'];

require('modeles/suivre.php'); 

desabonner_artiste($membre_id, $artiste_id);

 
$message='Désabonné !';

 $_SESSION['temp'] = $message;


header ('Location: index.php?page=accueil');
	
?>