<meta charset="utf-8" />
<?php

if($_SESSION['statut']=='artiste'){ 

$name=mysql_real_escape_string(htmlspecialchars($_POST['name'])); // Changement des variables pour les étudier 
$date=$_POST['date']; 
$artiste_id=$_SESSION['id'];
$artiste=htmlspecialchars($_SESSION['name']);
$fichier = "";

if(!empty($_POST['fichier'])){
$fichier = mysql_real_escape_string(htmlspecialchars($_POST['fichier']));
}

if($_FILES['fichier']['size']<500000){
	$nomOrigine = $_FILES['fichier']['name'];
				$elementsChemin = pathinfo($nomOrigine);
				$extensionFichier = $elementsChemin['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
	if (!(in_array($extensionFichier, $extensionsAutorisees))) {
$message = "Le fichier n'a pas l'extension attendue";
} else {    
require('modeles/photo.php'); 	
ajouter_photo_artiste($name, $date, $artiste_id, $fichier, $artiste);
				$donnee = derniere_photo();
				$nomDestination = $donnee['id'].".".$extensionFichier;
				ajout_photo($donnee['id'], $nomDestination); 

$repertoireDestination = dirname(dirname(__FILE__))."/"."files"."/"."images"."/";
move_uploaded_file($_FILES["fichier"]["tmp_name"], 
                                 $repertoireDestination.$nomDestination);


							
				$message = 'Photo ajoutée';

}

}else{
	$message= 'Le fichier est trop grand';
}

}

if($_SESSION['statut']=='salle'){ 

$name=mysql_real_escape_string(htmlspecialchars($_POST['name'])); // Changement des variables pour les étudier 
$date=$_POST['date']; 
$salle_id=$_SESSION['id'];
$salle=htmlspecialchars($_SESSION['name']);
$fichier = "";

if(!empty($_POST['fichier'])){
$fichier = mysql_real_escape_string(htmlspecialchars($_POST['fichier']));
}

if($_FILES['fichier']['size']<500000){
	$nomOrigine = $_FILES['fichier']['name'];
				$elementsChemin = pathinfo($nomOrigine);
				$extensionFichier = $elementsChemin['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
	if (!(in_array($extensionFichier, $extensionsAutorisees))) {
$message = "Le fichier n'a pas l'extension attendue";
} else {    
require('modeles/photo.php'); 	
ajouter_photo_salle($name, $date, $salle_id, $fichier, $salle);
				$donnee = derniere_photo();
				$nomDestination = $donnee['id'].".".$extensionFichier;
				ajout_photo($donnee['id'], $nomDestination); 

$repertoireDestination = dirname(dirname(__FILE__))."/"."files"."/"."images"."/";
move_uploaded_file($_FILES["fichier"]["tmp_name"], 
                                 $repertoireDestination.$nomDestination);


							
				$message = 'Photo ajoutée';

}

}else{
	$message= 'Le fichier est trop grand';
}

}




$_SESSION['temp'] = $message;


	header ('Location: index.php?page=accueil');
	
	?>

