<?php 

require('modeles/artiste.php');
require('modeles/extrait.php');
require('modeles/suivre.php');

$data=info_artiste($_GET["id"]);
$extraits=liste_extrait($_GET["id"]);

$abonnements=liste_abonnements_artiste($_GET["id"]);

include 'vues/artiste.php' 

?>


