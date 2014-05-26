<?php
$concert=$_POST['concert']; // Changement des variables pour les étudier 
$membre=$_SESSION['id'];

require('modeles/participation.php'); 

departicipation($membre, $concert);
 
$message='Vous ne participez plus au concert';

 $_SESSION['temp'] = $message;

header ('Location: index.php?page=accueil'); 
	
?>