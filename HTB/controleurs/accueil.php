<?php 

require('modeles/concert.php');
require('modeles/actualite.php');
require('modeles/salle.php');
require('modeles/artiste.php');
require('modeles/photo.php');


$actu=liste_actu();
$concert=liste_concert_valide();
$photo=liste_photo();


include 'vues/accueil.php' ?>