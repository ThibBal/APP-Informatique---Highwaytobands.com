<?php

require('modeles/membre.php');
require('modeles/concert.php');
require('modeles/suivre.php');
require('modeles/participation.php');

$data=info($_GET['id']);
$abo_artiste=liste_abonnements_artiste_membre($_GET['id']);
$abo_salle=liste_abonnements_salle_membre($_GET['id']);
$liste=liste_concerts_membre($_GET['id']);


include('vues/compte.php');



?>

