<?php 

require('modeles/salle.php');

require('modeles/suivre.php');


$abonnements=liste_abonnements_salle($_GET["id"]);

$data=info_salle($_GET["id"]);
include 'vues/salle.php'



 ?>