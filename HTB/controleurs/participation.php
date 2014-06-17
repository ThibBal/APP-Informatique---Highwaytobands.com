<?php
$concert=$_POST['concert']; // Changement des variables pour les étudier 
$membre=$_SESSION['id'];

require('modeles/participation.php');

participer($concert, $membre);
 
$message='Vous participez au concert !';

 $_SESSION['temp'] = $message;

header('Location: ' . $_SERVER['HTTP_REFERER']);
	
?>