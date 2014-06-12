<meta charset="utf-8" />
<?php

$nom=mysql_real_escape_string(htmlspecialchars($_POST['nom'])); // Changement des variables pour les étudier 
$album=mysql_real_escape_string(htmlspecialchars($_POST['album'])); 
$artiste_id=$_SESSION['id'];
//$fihier=date("YmdHis");


  $fichier = "";

if(!empty($_POST['fichier'])){
$fichier = mysql_real_escape_string(htmlspecialchars($_POST['fichier']));
}
	require('modeles/extrait.php'); 
			 ajouter($nom, $album, $fichier, $artiste_id);

				$nomOrigine = $_FILES['fichier']['name'];
				$elementsChemin = pathinfo($nomOrigine);
				$extensionFichier = $elementsChemin['extension'];
				$extensionsAutorisees = array("mp3", "m4r");

				$donnee = trouver($artiste_id, $fichier);

				//$nomDestination = "musique_du_".date("YmdHis").".".$extensionFichier; // Nom du fichier : date.extension
				$nomDestination = $donnee['id']."_".$donnee['artiste'].".".$extensionFichier;
				ajout_musique($donnee['id'], $nomDestination); // Ajout de l'attribu photo au membre

				$message = 'Morceau ajouté';

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



$_SESSION['temp'] = $message;


	header ('Location: index.php?page=accueil');
	
	?>