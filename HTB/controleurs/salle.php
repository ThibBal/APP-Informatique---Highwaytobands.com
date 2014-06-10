<?php 

require('modeles/salle.php');
require('modeles/concert.php');
require('modeles/suivre.php');
require('modeles/photo.php');
require('modeles/commentaire.php');



$abonnements=liste_abonnements_salle($_GET["id"]);
$data=info_salle($_GET["id"]);
$concert=concert_salle($_GET['id']);
$photo=liste_photo_salle($_GET['id']);
$commentaire=liste_comment_salle($_GET['id']);

if(isset($_SESSION['statut'])){
if($_SESSION['statut']=='membre'){
$membre=membre_abonne_salle($_SESSION['id'],$_GET["id"]);
}
}
include 'vues/salle.php'



 ?>