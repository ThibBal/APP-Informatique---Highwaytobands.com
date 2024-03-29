<?php

function inscription_salle($login, $password, $name, $capacity, $zipcode, $mail, $phone, $adress, $hours, $photo, $description){
global $bdd; // Inscription au site
	$bdd->query("INSERT INTO salle(login, password, name, capacity, zipcode, mail, phone, adress, hours, photo, description) VALUES('$login', '$password', '$name', '$capacity', '$zipcode', '$mail', '$phone', '$adress', '$hours', '$photo', '$description')");

}

function inscription_salle2($login, $photo, $mail, $name, $password, $description, $hours, $capacity, $phone, $numero, $voie, $ville, $pays, $zipcode, $departement){
global $bdd; 
	$bdd->query("INSERT INTO salle SET login='$login', photo='$photo', mail = '$mail', name = '$name', password = '$password', description='$description', hours='$hours', capacity='$capacity', phone='$phone', numero='$numero', voie='$voie', ville='$ville', pays='$pays', zipcode='$zipcode', departement='$departement'");

}

function supprimer_salle($id){
global $bdd; 
	$bdd->query("DELETE FROM sall WHERE id='$id'");
	$bdd->query("DELETE FROM actu WHERE salle_id='$id'");
	$bdd->query("DELETE FROM suivre WHERE salle_id='$id'");
	$bdd->query("DELETE FROM commentaire WHERE salle_id ='$id'");

}

function connexion_salle($login){
global $bdd;
$sql = "SELECT * from salle where login ='$login'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

function ajout_photo_salle($id, $photo){ // Ajout de la photo de profil
global $bdd; 
	$bdd->query("UPDATE salle SET photo='$photo' WHERE id=$id 
");

}

function modifications_salle($id, $mail, $name, $password, $description, $hours, $capacity, $phone, $numero, $voie, $ville, $pays, $zipcode, $departement){
global $bdd; 
	$bdd->query("UPDATE salle SET mail = '$mail', name = '$name', password = '$password', description='$description', hours='$hours', capacity='$capacity', phone='$phone', numero='$numero', voie='$voie', ville='$ville', pays='$pays', zipcode='$zipcode', departement='$departement' where id=$id");

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
$res = "SELECT * from salle ORDER BY id desc";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_salle_zipcode(){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * from salle ORDER BY zipcode";
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