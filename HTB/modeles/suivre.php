<?php

function suivre_artiste($artiste, $membre){
global $bdd; // Suivre un artiste
	$bdd->query("INSERT INTO suivre(artiste_id, membre_id) VALUES('$artiste', '$membre')");

}

function suivre_salle($salle, $membre){
global $bdd; // Suivre une salle
	$bdd->query("INSERT INTO suivre(salle_id, membre_id) VALUES('$salle', '$membre')");

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

?>