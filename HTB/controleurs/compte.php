<?php

require('modeles/membre.php');
require('modeles/artiste.php');
require('modeles/salle.php');
require('modeles/extrait.php');

$data=info($_SESSION['id']);

$extraits=liste_extrait($_SESSION['id']);

include('vues/compte.php');



?>

