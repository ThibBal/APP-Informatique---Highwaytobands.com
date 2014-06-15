<?php 

require('modeles/concert.php');
require('modeles/participation.php');
require('modeles/commentaire.php');
require('modeles/membre.php');
require('modeles/photo.php');


$data=info_concert($_GET["id"]);
$info_salle=info_salle_concert($data['salle_id']);
$info_artiste=info_artiste_concert($data['artiste_id']);
$liste=liste_participants($_GET['id']);
$commentaire=liste_comment_concert($_GET['id']);
$photo_salle=liste_photo_salle($data['salle_id']);
$photo_artiste=liste_photo_artiste($data['artiste_id']);
$dateMySQL= $data['date'];
$date = new DateTime($dateMySQL);

if($data['valider']=='1'){

if(isset($_SESSION['statut'])){
if($_SESSION['statut']=='membre'){
$membre=membre_participant($_SESSION['id'],$_GET["id"]);
}
}

include 'vues/concert.php'; 

}

if($data['valider']=='0'){
if(isset($_SESSION['statut'])){

	if($_SESSION['statut']=='salle'){
			if($_SESSION['id']==$data['salle_id']){

include 'vues/concert.php'; 


}else{
 $_SESSION['temp'] = 'Cette page ne vous est pas destinée';

header ('Location: index.php?page=accueil'); 

}

}

if($_SESSION['statut']=='artiste'){
			if($_SESSION['id']==$data['artiste_id']){

include 'vues/concert.php'; 


}else{
 $_SESSION['temp'] = 'Cette page ne vous est pas destinée';

header ('Location: index.php?page=accueil'); 

}

}

}else{
 $_SESSION['temp'] = 'Cette page ne vous est pas destinée';
header ('Location: index.php?page=accueil'); 
}
}
?>