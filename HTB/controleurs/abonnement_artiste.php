<?php

$artiste_id=$_POST['artiste']; // Changement des variables pour les étudier 
$membre_id=$_SESSION['id'];

require('modeles/suivre.php'); 

suivre_artiste($artiste_id, $membre_id);

 
$message='Vous êtes maintenant abonné à cet artiste';

 $_SESSION['temp'] = $message;


header('Location: ' . $_SERVER['HTTP_REFERER']);
	
?>