<?php 

require('modeles/artiste.php');
require('modeles/extrait.php');

$data=info_artiste($_GET["id"]);
$extraits=liste_extrait($_GET["id"]);

include 'vues/artiste.php' 

?>