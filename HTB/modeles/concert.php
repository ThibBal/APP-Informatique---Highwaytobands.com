<?php

function creation_concert($artiste, $salle, $date, $description, $price, $name, $valider){
global $bdd; // Création d'un concert
	$bdd->query("INSERT INTO concert(artiste, salle, date, description, price, name, valider) VALUES('$artiste', '$salle', '$date', '$description', '$price', '$name', '$valider')");

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

function dernier_concert(){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * from concert ORDER BY id DESC LIMIT 1" ;
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));
$data = $req-> fetch();
 	return $data;
}

function validation($id, $valider){ // Ajout de la photo de profil
global $bdd; 
	$bdd->query("UPDATE concert SET valider='$valider' WHERE id=$id 
");

}


?>