<meta charset="utf-8" />
<?php

if($_SESSION['statut']=='artiste'){ 

$name=$_POST['name']; // Changement des variables pour les étudier 
$date=$_POST['date']; 
$artiste_id=$_SESSION['id'];
$artiste=$_SESSION['name'];
$fichier = "";

if(!empty($_POST['fichier'])){
$fichier = mysql_real_escape_string(htmlspecialchars($_POST['fichier']));
}
	require('modeles/photo.php'); 
			 ajouter_photo_artiste($name, $date, $artiste_id, $fichier, $artiste);
				$donnee = derniere_photo();

				$nomOrigine = $_FILES['fichier']['name'];
				$elementsChemin = pathinfo($nomOrigine);
				$extensionFichier = $elementsChemin['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
				$nomDestination = $donnee['id'].".".$extensionFichier;
				

				$message = 'Photo ajoutée';

if (!(in_array($extensionFichier, $extensionsAutorisees))) {
$message = "Le fichier n'a pas l'extension attendue";
} else {    

ajout_photo($donnee['id'], $nomDestination); // Modification de l'entrée photo dans la table
$repertoireDestination = dirname(dirname(__FILE__))."/"."files"."/"."images"."/"; // Copie dans le répertoire /files/images/artistes

move_uploaded_file($_FILES["fichier"]["tmp_name"], 
                                 $repertoireDestination.$nomDestination);


}

}

if($_SESSION['statut']=='salle'){ 

$name=$_POST['name']; // Changement des variables pour les étudier 
$date=$_POST['date']; 
$salle_id=$_SESSION['id'];
$salle=$_SESSION['name'];
$fichier = "";

if(!empty($_POST['fichier'])){
$fichier = mysql_real_escape_string(htmlspecialchars($_POST['fichier']));
}
	require('modeles/photo.php'); 
			 ajouter_photo_salle($name, $date, $salle_id, $fichier, $salle);
				$donnee = derniere_photo();

				$nomOrigine = $_FILES['fichier']['name'];
				$elementsChemin = pathinfo($nomOrigine);
				$extensionFichier = $elementsChemin['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
			$nomDestination = $donnee['id'].".".$extensionFichier;
				

				$message = 'Photo ajoutée';

if (!(in_array($extensionFichier, $extensionsAutorisees))) {
$message = "Le fichier n'a pas l'extension attendue";
} else {    

ajout_photo($donnee['id'], $nomDestination); // Modification de l'entrée photo dans la table
$repertoireDestination = dirname(dirname(__FILE__))."/"."files"."/"."images"."/"; // Copie dans le répertoire /files/images/artistes

move_uploaded_file($_FILES["fichier"]["tmp_name"], 
                                 $repertoireDestination.$nomDestination);


}

}

$_SESSION['temp'] = $message;


	header ('Location: index.php?page=accueil');
	
	?>

