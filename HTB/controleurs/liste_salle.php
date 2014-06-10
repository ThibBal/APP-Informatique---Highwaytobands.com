<?php

;
require('modeles/salle.php');

$salles=liste_salle();
$salles2=liste_salle_zipcode();



include('vues/liste_salle.php');



?>

