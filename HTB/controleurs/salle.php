<?php 

require('modeles/salle.php');
require('modeles/concert.php');
require('modeles/suivre.php');
require('modeles/photo.php');


$abonnements=liste_abonnements_salle($_GET["id"]);
$data=info_salle($_GET["id"]);
$concert=concert_salle($_GET['name']);
$photo=liste_photo_salle($_GET['id']);

if(isset($_SESSION['statut'])){
if($_SESSION['statut']=='membre'){
$membre=membre_abonne_salle($_SESSION['id'],$_GET["id"]);
}
}
include 'vues/salle.php'



 ?>