<?php 

require('modeles/artiste.php');
require('modeles/extrait.php');
require('modeles/suivre.php');
require('modeles/actualite.php');
require('modeles/concert.php');

$data=info_artiste($_GET["id"]);
$extraits=liste_extrait($_GET["id"]);
$abonnements=liste_abonnements_artiste($_GET["id"]);
$actu=liste_actu_artiste($_GET["id"]);
$concert=concert_artiste($_GET['name']);

if(isset($_SESSION['statut'])){
if($_SESSION['statut']=='membre'){
$membre=membre_abonne_artiste($_SESSION['id'],$_GET["id"]);
}
}

include 'vues/artiste.php' 

?>


