<?php 

require('modeles/concert.php');
require('modeles/actualite.php');
require('modeles/salle.php');
require('modeles/artiste.php');
require('modeles/photo.php');
require('modeles/suivre.php');

//$notifs=liste_notifs();
$actu=liste_actu();
$concert=liste_concert_valide();
$photo=liste_photo();
$artiste_abo=info_artiste_abonne($_SESSION['id']);
$actu_perso=liste_actu_artiste($artiste_abo['id']);

include 'vues/accueil.php' ?>