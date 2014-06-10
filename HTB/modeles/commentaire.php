<?php

function poster_comment($membre_id, $artiste_id, $salle_id, $concert_id, $contenu, $date){
global $bdd; 
	$bdd->query("INSERT INTO commentaire(membre_id, artiste_id, salle_id, concert_id, contenu, date) VALUES('$membre_id', '$artiste_id', '$salle_id', '$concert_id', '$contenu', '$date')");

}


function liste_comment_artiste($id){ 
	global $bdd;
$res = "SELECT * from commentaire WHERE artiste_id='$id' ORDER BY id DESC";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_comment_salle($id){ 
	global $bdd;
$res = "SELECT * from commentaire WHERE salle_id='$id' ORDER BY id DESC";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_comment_concert($id){ 
	global $bdd;
$res = "SELECT * from commentaire WHERE concert_id='$id'ORDER BY id DESC";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

?>