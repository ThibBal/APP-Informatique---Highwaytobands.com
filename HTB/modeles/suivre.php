
<?php

function suivre_artiste($artiste, $membre){
global $bdd; // Suivre un artiste
	$bdd->query("INSERT INTO suivre(artiste_id, membre_id) VALUES('$artiste', '$membre')");

}

function suivre_salle($salle, $membre){
global $bdd; // Suivre une salle
	$bdd->query("INSERT INTO suivre(salle_id, membre_id) VALUES('$salle', '$membre')");

}

function desabonner_artiste($membre_id, $artiste_id){
global $bdd; // Supprimer un morceau de musique
	$bdd->query("DELETE FROM suivre WHERE membre_id='$membre_id' AND artiste_id=$artiste_id");

}

function desabonner_salle($membre_id, $salle_id){
global $bdd; // Supprimer un morceau de musique
	$bdd->query("DELETE FROM suivre WHERE membre_id='$membre_id' AND salle_id=$salle_id");

}


function info_membre_abonne($id){ // Infos sur un membre qui suit une salle / un artiste
	global $bdd;
$res = "SELECT name, id from membre WHERE id='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));
	$donnee = $req->fetch();
	return $donnee; 
}



function liste_abonnements_artiste($artiste_id){ //Récupère les membre qui suivent un artiste
	global $bdd;
$res = "SELECT membre_id from suivre WHERE artiste_id='$artiste_id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_abonnements_salle($salle_id){ // Récupère les membre qui suivent une salle
	global $bdd;
$res = "SELECT membre_id from suivre WHERE salle_id='$salle_id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_abonnements_artiste_membre($id){ // Récupère les membre qui suivent une salle
	global $bdd;
$res = "SELECT artiste_id from suivre WHERE membre_id='$id' and salle_id IS  NULL";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_abonnements_salle_membre($id){ // Récupère les membre qui suivent une salle
	global $bdd;
$res = "SELECT salle_id from suivre WHERE membre_id='$id' and artiste_id IS NULL";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function info_artiste_abonne($id){ // Infos sur un membre qui suit une salle / un artiste
	global $bdd;
$res = "SELECT name, id from artiste WHERE id='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));
	$donnee = $req->fetch();
	return $donnee; 
}

function info_salle_abonne($id){ // Infos sur un membre qui suit une salle / un artiste
	global $bdd;
$res = "SELECT name, id from salle WHERE id='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));
	$donnee = $req->fetch();
	return $donnee; 
}

function membre_abonne_salle($id, $id2){
global $bdd;
$sql = "SELECT membre_id from suivre where membre_id ='$id' and salle_id='$id2'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

function membre_abonne_artiste($id, $id2){
global $bdd;
$sql = "SELECT membre_id from suivre where membre_id ='$id' and artiste_id='$id2'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}


?>