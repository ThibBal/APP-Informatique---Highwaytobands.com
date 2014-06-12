<?php

function inscription($login, $password,$mail, $zipcode, $photo, $name){ // Inscription au site
global $bdd; 
	$bdd->query("INSERT INTO membre(login, password, mail, zipcode, photo, name) VALUES('$login', '$password', '$mail', '$zipcode', '$photo', '$name')");

}

function supprimer_membre($id){
global $bdd; 
	$bdd->query("DELETE FROM membre WHERE id='$id'");

}


function inscription2($login, $password,$mail, $zipcode, $photo, $name){ // Inscription au site
global $bdd; 
	$bdd->query("INSERT INTO membre(login, password, mail, zipcode, photo, name) VALUES('$login', '$password', '$mail', '$zipcode', '$photo', '$name')");

}

function modifications_membre($id, $mail, $zipcode, $name, $password){ 
global $bdd; 
	$bdd->query("UPDATE membre SET mail = '$mail', zipcode = '$zipcode', name = '$name', password = '$password' where id=$id");

}

function ajout_photo($id, $photo){ // Ajout de la photo de profil
global $bdd; 
	$bdd->query("UPDATE membre SET photo='$photo' WHERE id=$id 
");

}

function veriflogin($login){ // Vérification du login
global $bdd;
$result=$bdd->query("SELECT COUNT(id) FROM membre WHERE login='$login'");
$num = $result->fetchColumn();
if ($num!=1){
	return true;
	}else{
		return false;
	}
}



function verification($login){
global $bdd;
$sql = "SELECT id, password, name from membre where login ='$login'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}


function recupid($login, $password){
	global $bdd;
	$result=$bdd->query("SELECT id FROM membre WHERE login='$login' AND password='$password' ");
	$res = $result-> fetch();
	return $res; 
}


function info($id){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * from membre where id ='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}

function liste_membre(){ // Liste des membres inscrits au site internet
	global $bdd;
$res = "SELECT * from membre ORDER BY login";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function get_ip() { //Retourne la vraie adresse IP
        return (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
}




?>
