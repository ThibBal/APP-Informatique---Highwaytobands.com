<?php

function creation_concert($artist, $salle, $date, $description, $price){
global $bdd; // Création d'un concert
	$bdd->query("INSERT INTO concert(artist, salle, date, description, price) VALUES('$artist', '$sale', '$date', '$description', '$price')");

}

function info_concert($id){
	global $bdd;
$res = "SELECT * from concert where id ='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}

function liste_concert(){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * from concert";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}


?>