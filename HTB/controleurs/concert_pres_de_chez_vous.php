<?php
require('modeles/concert.php');
require('modeles/membre.php');  

$cp= info($_SESSION['id']);
$liste_salle_near=detection_concert($cp['zipcode']);

include 'vues/concert_pres_de_chez_vous.php'; 

?>