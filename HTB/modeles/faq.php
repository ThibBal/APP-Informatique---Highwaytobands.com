<?php

function liste_faq(){
	global $bdd;
$res = "SELECT * from faq";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function ajout_faq($question, $reponse){
global $bdd;
	$bdd->query("INSERT INTO faq(question, reponse) VALUES('$question', '$reponse')");

}

function supprimer_faq($id){
global $bdd; 
	$bdd->query("DELETE FROM faq WHERE id='$id'");

}



?>