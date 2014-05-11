<?php if($_SESSION['statut']=='artiste'){ 
require('modeles/extrait.php');

$extraits=liste_extrait($_SESSION['id']);

include 'vues/musique.php';


}else{
	$message = "Vous n'êtes pas un artiste";
	$_SESSION['temp'] = $message;
	include 'vues/accueil.php';
}


?>
