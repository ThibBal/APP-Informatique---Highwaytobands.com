<?php

function ajouter_photo_artiste($name, $date, $artiste_id, $fichier, $a){
global $bdd; // Ajouter un morceau de musique
	$bdd->query("INSERT INTO photo(name, date, artiste_id, fichier, artiste) VALUES('$name', '$date', '$artiste_id', '$fichier', '$a')");

}

function ajouter_photo_salle($name, $date, $salle_id, $fichier, $a){
global $bdd; // Ajouter un morceau de musique
	$bdd->query("INSERT INTO photo(name, date, salle_id, fichier, salle) VALUES('$name', '$date', '$salle_id', '$fichier', '$a')");

}

function supprimer_photo($nom, $artiste){
global $bdd; // Supprimer un morceau de musique
	$bdd->query("DELETE FROM photo WHERE nom='$nom' AND artiste_id=$artiste");

}

function supprimer_photo_id($id){
global $bdd; // Supprimer un morceau de musique
	$bdd->query("DELETE FROM photo WHERE id='$id'");

}


function trouver_photo_id($id){
global $bdd;
$sql = "SELECT * from photo where id ='$id'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}


function ajout_photo($id, $fichier){ // Ajout de la photo de profil
global $bdd; 
	$bdd->query("UPDATE photo SET fichier='$fichier' WHERE id=$id 
");

}

function photo($artiste){ 
	global $bdd;
$res = "SELECT * from photo where artiste_id=$artiste";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$musique = $req-> fetch();
 	return $musique;
}

function liste_photo_artiste($artiste_id){
	global $bdd;
$res = "SELECT * from photo where artiste_id='$artiste_id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_photo_salle($salle_id){ 
	global $bdd;
$res = "SELECT * from photo where salle_id='$salle_id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}


function liste_photo(){ 
	global $bdd;
$res = "SELECT * from photo ORDER BY id DESC LIMIT 10";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function trouver_photo($artiste_id, $fichier){ // Permet de récupérer les infos sur la photo qu'on souhaite ajouter
global $bdd;
$sql = "SELECT * from photo where artiste_id ='$artiste_id' and fichier ='$fichier'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

function trouver_photo_salle($salle_id, $fichier){ // Permet de récupérer les infos sur la photo qu'on souhaite ajouter
global $bdd;
$sql = "SELECT * from photo where salle_id ='$salle_id' and fichier ='$fichier'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

function trouver_nom_photo($nom, $artiste){
global $bdd;
$sql = "SELECT * from photo where artiste_id ='$artiste' and nom ='$nom'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

function derniere_photo(){
global $bdd;
$sql = "SELECT * from photo ORDER BY id DESC LIMIT 1";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

?>
