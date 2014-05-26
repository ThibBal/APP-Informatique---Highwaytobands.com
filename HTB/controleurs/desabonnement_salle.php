<?php

$salle_id=$_POST['salle']; // Changement des variables pour les étudier 
$membre_id=$_SESSION['id'];

require('modeles/suivre.php'); 

desabonner_salle($membre_id, $salle_id);

 
$message='Désabonné !';

 $_SESSION['temp'] = $message;

header ('Location: index.php?page=accueil'); 
	
?>