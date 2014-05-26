<?php


function participer($concert, $membre){
global $bdd; // Participer à un concert
	$bdd->query("INSERT INTO participation(concert_id, membre_id) VALUES('$concert', '$membre')");

}

function departicipation($membre_id, $concert_id){
global $bdd; // Ne plus participer au concert
	$bdd->query("DELETE FROM participation WHERE membre_id='$membre_id' AND concert_id=$concert_id");

}


function info_membre_participe($id){ // Infos sur un membre qui participe à un concert
	global $bdd;
$res = "SELECT name, id from membre WHERE id='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));
	$donnee = $req->fetch();
	return $donnee; 
}

function liste_participants($id){ // Récupère les membre qui participent à un concert
	global $bdd;
$res = "SELECT membre_id from participation WHERE concert_id='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_concerts_membre($id){ // Récupère les concerts où un membre participe
	global $bdd;
$res = "SELECT concert_id from participation WHERE membre_id='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function membre_participant($id, $id2){
global $bdd;
$sql = "SELECT membre_id from participation where membre_id ='$id' and concert_id='$id2'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}


?>