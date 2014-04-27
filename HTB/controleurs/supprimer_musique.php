<meta charset="utf-8" />
<?php

$nom=$_POST['nom']; // Changement des variables pour les étudier 
$artiste=$_SESSION['id'];

	require('modeles/extrait.php'); 
			 supprimer($nom, $artiste);

	header ('Location: index.php?page=accueil');
	
	?>