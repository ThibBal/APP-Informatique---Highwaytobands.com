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
				$nomOrigine = $_FILES['fichier']['name'];
				$elementsChemin = pathinfo($nomOrigine);
				$extensionFichier = $elementsChemin['extension'];
				$extensionsAutorisees = array("mp3", "avi", "mp4", "m4r");
				$nomDestination = "musique_du_".date("YmdHis").".".$extensionFichier; // Nom du fichier : id.extension
				ajout_musique($donnee['id'], $nomDestination); // Ajout de l'attribu photo au membre
				$message = 'Inscription réussite';

if (!(in_array($extensionFichier, $extensionsAutorisees))) {
$message = "Le fichier n'a pas l'extension attendue";
} else {    
// Copie dans le repertoire du script avec un nom
// incluant l'heure a la seconde pres 
$repertoireDestination = dirname(dirname(__FILE__))."/"."files"."/"."musiques"."/"; // Copie dans le répertoire img
//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

move_uploaded_file($_FILES["fichier"]["tmp_name"], 
                                 $repertoireDestination.$nomDestination);

   // $message = "Le fichier temporaire ".$_FILES["photo"]["tmp_name"].
     //       " a été déplacé vers ".$repertoireDestination.$nomDestination;

}






	header ('Location: index.php?page=accueil');
	
	?>