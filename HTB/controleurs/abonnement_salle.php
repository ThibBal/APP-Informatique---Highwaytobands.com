<?php

$salle_id=$_POST['salle']; // Changement des variables pour les étudier 
$membre_id=$_SESSION['id'];

require('modeles/suivre.php'); 

suivre_salle($salle_id, $membre_id);

 
$message='Ok !';

 $_SESSION['temp'] = $message;


include 'vues/accueil.php' 
	
?>