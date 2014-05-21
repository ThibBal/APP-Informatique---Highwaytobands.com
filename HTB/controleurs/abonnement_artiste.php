<?php

$artiste_id=$_POST['artiste']; // Changement des variables pour les étudier 
$membre_id=$_SESSION['id'];

require('modeles/suivre.php'); 

suivre_artiste($artiste_id, $membre_id);

 
$message='Ok !';

 $_SESSION['temp'] = $message;


include 'vues/accueil.php' 
	
?>