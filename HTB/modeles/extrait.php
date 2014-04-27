<?php

function ajouter($nom, $duree, $album, $artiste_id, $fichier, $artiste){
global $bdd; // Ajouter un morceau de musique
	$bdd->query("INSERT INTO extrait(nom, duree, album, fichier, artiste) VALUES('$nom', '$duree', '$album', '$fichier', '$artiste')");

}

function supprimer($nom, $artiste){
global $bdd; // Supprimer un morceau de musique
	$bdd->query("DELETE FROM extrait WHERE nom='$nom' AND artiste=$artiste");

}

function musique($artiste){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * from extrait where artiste=$artiste";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$musique = $req-> fetch();
 	return $musique;
}

function liste_extrait($id){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * from extrait where artiste=$id";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}



?>
