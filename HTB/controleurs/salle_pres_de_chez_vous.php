<?php
require('modeles/concert.php');
require('modeles/membre.php');  

$cp= info($_SESSION['id']);
$cp=substr($cp['zipcode'], 0, 2);
$liste_salle_near=detection_concert($cp);

include 'vues/salle_pres_de_chez_vous.php'; 

?>