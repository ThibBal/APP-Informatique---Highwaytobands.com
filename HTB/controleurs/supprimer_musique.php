<meta charset="utf-8" />
<?php

$nom=$_POST['nom']; // Changement des variables pour les étudier 
$artiste=$_SESSION['id'];

	require('modeles/extrait.php'); 
			 $donnee=trouver_nom($nom, $artiste);
			 unlink(dirname(dirname(__FILE__))."/"."files"."/"."musiques"."/".$donnee['fichier']);
			 supprimer($nom, $artiste);
	$message = 'Morceau supprimé';
	$_SESSION['temp'] = $message;
	header ('Location: index.php?page=accueil');
	
	?>