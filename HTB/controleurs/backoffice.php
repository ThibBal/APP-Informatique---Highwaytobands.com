<?php 
require('modeles/membre.php');
require('modeles/concert.php');
require('modeles/salle.php');
require('modeles/artiste.php');

if(isset($_SESSION['statut'])){
if($_SESSION['statut']=='membre'){
$data=info($_SESSION['id']);
if($data['admin']=='1'){

include 'vues/backoffice.php';

}

}

}else{

 $_SESSION['temp'] = "Vous n'êtes pas un administrateur";

header ('Location: index.php?page=accueil'); 
	
}
 ?>