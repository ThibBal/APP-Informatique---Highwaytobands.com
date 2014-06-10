<?php 

require('modeles/concert.php');
require('modeles/actualite.php');
require('modeles/salle.php');
require('modeles/artiste.php');
require('modeles/photo.php');
require('modeles/suivre.php');
require('modeles/participation.php');



//$notifs=liste_notifs();
$actu=liste_actu();
$concert=liste_concert_valide();
$photo=liste_photo();
//$artiste_abo=info_artiste_abonne($_SESSION['id']);
//$actu_perso=liste_actu_artiste($artiste_abo['id']);

if(isset($_SESSION['id'])){
$liste_artiste=liste_abonnements_artiste_membre($_SESSION['id']);
$liste_salle=liste_abonnements_salle_membre($_SESSION['id']);
$liste_concert=liste_concerts_membre($_SESSION['id']);
}
include 'vues/accueil.php' ?>