<?php 
require('modeles/membre.php');
require('modeles/artiste.php');
require('modeles/salle.php');
require('modeles/concert.php');
require('modeles/style.php');

if(isset($_SESSION['statut'])){
if($_SESSION['statut']=='membre'){
$data=info($_SESSION['id']);
if($data['admin']=='1'){

$membres=liste_membre();
$artistes=liste_artiste();
$salles=liste_salle();
$concerts=liste_concert();
$styles=liste_style();




include 'vues/backoffice.php';
}
}
}else{
$_SESSION['temp'] = "Vous n'êtes pas un administrateur";
header ('Location: index.php?page=accueil'); 
	
}
 ?>