<?php

function ajouter($nom, $album, $fichier, $artiste_id){
global $bdd; // Ajouter un morceau de musique
	$bdd->query("INSERT INTO extrait(nom, album, fichier, artiste) VALUES('$nom', '$album', '$fichier', '$artiste_id')");

}

function supprimer($nom, $artiste){
global $bdd; // Supprimer un morceau de musique
	$bdd->query("DELETE FROM extrait WHERE nom='$nom' AND artiste=$artiste");

}

function supprimer_id($id){
global $bdd; // Supprimer un morceau de musique
	$bdd->query("DELETE FROM extrait WHERE id='$id'");

}

function ajout_musique($id, $fichier){ // Ajout de la photo de profil
global $bdd; 
	$bdd->query("UPDATE extrait SET fichier='$fichier' WHERE id=$id 
");

}

function musique($artiste){ 
	global $bdd;
$res = "SELECT * from extrait where artiste=$artiste";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$musique = $req-> fetch();
 	return $musique;
}

function liste_extrait($artiste_id){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * from extrait where artiste=$artiste_id";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function trouver($artiste_id, $fichier){
global $bdd;
$sql = "SELECT * from extrait where artiste ='$artiste_id' and fichier ='$fichier'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

function trouver_id($id){
global $bdd;
$sql = "SELECT * from extrait where id ='$id'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

function trouver_nom($nom, $artiste){
global $bdd;
$sql = "SELECT * from extrait where artiste ='$artiste' and nom ='$nom'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

?>
