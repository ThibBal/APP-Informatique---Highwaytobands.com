<?php 

require('modeles/concert.php');
require('modeles/actualite.php');
require('modeles/salle.php');
require('modeles/artiste.php');


$actu=liste_actu();
$concert=liste_concert();


include 'vues/accueil.php' ?>