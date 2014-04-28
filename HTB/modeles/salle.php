<?php

function inscription_salle($login, $password, $name, $capacity, $zipcode, $mail, $phone, $adress, $description, $hours, $photo){
global $bdd; // Inscription au site
	$bdd->query("INSERT INTO salle(login, password, name, capacity, zipcode, mail, phone, adress, description, hours, photo) VALUES('$login', '$password', '$name', '$capacity', '$zipcode', '$mail', '$phone', '$adress', '$description', '$hours', '$photo')");

}

function connexion_salle($login){
global $bdd;
$sql = "SELECT id, password from salle where login ='$login'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}


function veriflogin_salle($login){ // Vérification du login
global $bdd;
$result=$bdd->query("SELECT COUNT(id) FROM salle WHERE login='$login'");
$num = $result->fetchColumn();
if ($num!=1){
	return true;
	}else{
		return false;
	}
}

function liste_salle(){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * from salle";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}


function recupid_salle($login, $password){
	global $bdd;
	$result=$bdd->query("SELECT id FROM salle WHERE login='$login' AND password='$password' ");
	$res = $result-> fetch();
	return $res; 
}

function id_salle($login, $password){
	global $bdd;
$req = $bdd->prepare('SELECT id FROM salle WHERE login = :login AND password = :password');
$req->execute(array(
    'login' => $login,
    'password' => $password));

$resultat = $req->fetch();
return $resultat;
}

function info_salle($id){
	global $bdd;
$res = "SELECT * from salle where id ='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}



?>