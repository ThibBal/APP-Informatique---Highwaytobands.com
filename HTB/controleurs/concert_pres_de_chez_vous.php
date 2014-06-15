<?php
require('modeles/concert.php');
require('modeles/membre.php');  

if(isset($_SESSION['id'])){
	if($_SESSION['statut']=='membre'){
$cp= info($_SESSION['id']);
$cp=substr($cp['zipcode'], 0, 2);
$liste_salle_near=detection_concert($cp);

include 'vues/concert_pres_de_chez_vous.php'; 

}else{
	$_SESSION['temp']='Vous devez être membre pour profiter de cette fonction';
	header ('Location: index.php?page=accueil');

}

}else{
	$_SESSION['temp']='Vous devez être membre pour profiter de cette fonction';
	header ('Location: index.php?page=accueil');
}
?>