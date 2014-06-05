<?php 

function creer_actu($artiste_id, $salle_id, $artiste_name, $salle_name, $titre, $contenu, $date){
global $bdd; 
	$bdd->query("INSERT INTO actu(artiste_id, salle_id, artiste_name, salle_name, titre, contenu, date) VALUES('$artiste_id', '$salle_id', '$artiste_name', '$salle_name', '$titre', '$contenu', '$date')");

}

function liste_actu(){
	global $bdd;
$res = "SELECT * from actu ORDER BY date desc";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_actu_artiste($id){ 
	global $bdd;
$res = "SELECT * from actu WHERE artiste_id='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_actu_salle($id){ 
	global $bdd;
$res = "SELECT * from actu WHERE salle_id='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

?>