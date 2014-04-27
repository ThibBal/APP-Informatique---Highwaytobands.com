<meta charset="utf-8" />
<?php

$nom=$_POST['nom']; // Changement des variables pour les étudier 
$duree=$_POST['duree']; 
$album=$_POST['album']; 
$artiste=$_SESSION['id'];


  $fichier = "";

if(!empty($_POST['fichier'])){
$fichier = mysql_real_escape_string(htmlspecialchars($_POST['fichier']));
}
	require('modeles/extrait.php'); 
			 ajouter($nom, $duree, $album, $artiste_id, $fichier, $artiste);

	header ('Location: index.php?page=accueil');
	
	?>