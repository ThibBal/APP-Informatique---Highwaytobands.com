<?php if($_SESSION['statut']!='membre'){ 
require('modeles/photo.php');

if($_SESSION['statut']=='artiste'){
$photos=liste_photo_artiste($_SESSION['id']);
}

if($_SESSION['statut']=='salle'){
$photos=liste_photo_salle($_SESSION['id']);
}


include 'vues/photo.php';

}else{
	$message = "Vous n'êtes pas un artiste ou une salle";
	$_SESSION['temp'] = $message;
header ('Location: index.php?page=accueil');
}


?>
