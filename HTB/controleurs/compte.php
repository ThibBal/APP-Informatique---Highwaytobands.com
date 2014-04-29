<?php

require('modeles/membre.php');
require('modeles/artiste.php');
require('modeles/salle.php');
require('modeles/extrait.php');



$data=info($_GET["id"]);
$data2=info_artiste($_SESSION['id']);
$data3=info_salle($_SESSION['id']);

$extraits=liste_extrait($_GET["id"]);

include('vues/compte.php');



?>

