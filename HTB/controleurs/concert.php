<?php 

require('modeles/concert.php');
require('modeles/participation.php');

$data=info_concert($_GET["id"]);
$info_salle=info_salle_concert($data['salle']);
$info_artiste=info_artiste_concert($data['artiste']);
$liste=liste_participants($_GET['id']);

if(isset($_SESSION['statut'])){
if($_SESSION['statut']=='membre'){
$membre=membre_participant($_SESSION['id'],$_GET["id"]);
}
}

include 'vues/concert.php' 

?>