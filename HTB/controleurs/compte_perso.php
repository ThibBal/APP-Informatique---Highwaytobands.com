<?php
if(isset($_SESSION['statut'])){

require('modeles/membre.php');
require('modeles/artiste.php');
require('modeles/salle.php');
require('modeles/extrait.php');
require('modeles/concert.php');
require('modeles/suivre.php');
require('modeles/participation.php');


$data=info($_SESSION['id']);
$data2=info_artiste($_SESSION['id']);
$data3=info_salle($_SESSION['id']);

if($_SESSION['statut']=='salle'){ 
$valider=concert_valider_salle($_SESSION['name']);
$concert=concert_salle($_SESSION['name']);
}

if($_SESSION['statut']=='artiste'){
$valider=concert_valider_artiste($_SESSION['name']);
$concert=concert_artiste($_SESSION['name']);
$extraits=liste_extrait($_SESSION["id"]);
}

if($_SESSION['statut']=='membre'){
$abo_artiste=liste_abonnements_artiste_membre($_SESSION['id']);
$abo_salle=liste_abonnements_salle_membre($_SESSION['id']);
$liste=liste_concerts_membre($_SESSION['id']);
}





include('vues/compte_perso.php');

}else{
 $_SESSION['temp'] = 'Veuillez vous inscrire';
	include('vues/accueil.php');
}

?>



