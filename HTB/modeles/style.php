<?php

function liste_style(){
	global $bdd;
$res = "SELECT * from style ORDER BY style ASC";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function ajout_style($style){
global $bdd;
	$bdd->query("INSERT INTO style(style) VALUES('$style')");

}

function supprimer_style($id){
global $bdd; 
	$bdd->query("DELETE FROM style WHERE id='$id'");

}



?>