<?php

function inscription_artiste($login, $password, $name, $style, $description, $mail, $photo){
global $bdd; // Inscription au site
	$bdd->query("INSERT INTO artiste(login, password, name, style, description, mail, photo) VALUES('$login', '$password', '$name', '$style', '$description', '$mail', '$photo')");

}

function connexion_artiste($login){
global $bdd;
$sql = "SELECT id, password, name from artiste where login ='$login'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

function ajout_photo_artiste($id, $photo){ // Ajout de la photo de profil
global $bdd; 
	$bdd->query("UPDATE artiste SET photo='$photo' WHERE id=$id 
");

}

function veriflogin_artiste($login){ // Vérification du login
global $bdd;
$result=$bdd->query("SELECT COUNT(id) FROM artiste WHERE login='$login'");
$num = $result->fetchColumn();
if ($num!=1){
	return true;
	}else{
		return false;
	}
}

function liste_artiste(){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * from artiste";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}


function recupid_artiste($login, $password){
	global $bdd;
	$result=$bdd->query("SELECT id FROM artiste WHERE login='$login' AND password='$password' ");
	$res = $result-> fetch();
	return $res; 
}

function id_artiste($login, $password){
	global $bdd;
$req = $bdd->prepare('SELECT id FROM artiste WHERE login = :login AND password = :password');
$req->execute(array(
    'login' => $login,
    'password' => $password));

$resultat = $req->fetch();
return $resultat;
}

function info_artiste($id){
	global $bdd;
$res = "SELECT * from artiste where id ='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}



?>
