<meta charset="utf-8" />
<?php

//$nom=$_POST['nom']; // Changement des variables pour les étudier 
//$artiste=$_SESSION['id'];
$id=$_POST['nom'];

	require('modeles/photo.php'); 
			// $donnee=trouver_nom($nom, $artiste);
	$donnee=trouver_photo_id($id);
			 unlink(dirname(dirname(__FILE__))."/"."files"."/"."images"."/".$donnee['fichier']);
			// supprimer($nom, $artiste);
			 supprimer_photo_id($id);
	$message = 'Photo supprimée';
	$_SESSION['temp'] = $message;
	header ('Location: index.php?page=compte_perso');
	
	?>