<? php
require('modeles/concert.php'); 

$cp= info($_SESSION['id'])
$liste_salle_near=detection_concert($cp[zipcode]);
$liste_concert_near=concert_salle($liste_salle_near['salle_id']);
include 'vues/concert_pres_de_vous.php'; 

?>