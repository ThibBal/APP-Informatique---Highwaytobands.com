<?php 

require('modeles/concert.php');

$data=info_concert($_GET["id"]);
$info_salle=info_salle_concert($data['salle']);
$info_artiste=info_artiste_concert($data['artiste']);

include 'vues/concert.php' 

?>