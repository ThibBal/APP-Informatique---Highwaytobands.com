<?php 

function connexion_($login){
global $bdd;
$sql = "SELECT id, password from membre, artiste, salle where membre.login ='$login' or salle.login ='$login' or artiste.login ='$login'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

?>