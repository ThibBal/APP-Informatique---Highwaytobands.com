<meta charset="utf-8" />
<?php

//$nom=$_POST['nom']; // Changement des variables pour les étudier 
$artiste=$_SESSION['id'];
$id=$_POST['nom'];

	require('modeles/extrait.php'); 
			// $donnee=trouver_nom($nom, $artiste);
	$donnee=trouver_id($id);
			 unlink(dirname(dirname(__FILE__))."/"."files"."/"."musiques"."/".$donnee['fichier']);
			// supprimer($nom, $artiste);
			 supprimer_id($id);
	$message = 'Morceau supprimé';
	$_SESSION['temp'] = $message;
	header ('Location: index.php?page=compte_perso');
	
	?>