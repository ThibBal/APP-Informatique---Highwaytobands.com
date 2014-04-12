<?php

function inscription($login, $password, $name, $style, $description, $mail){
global $bdd; // Inscription au site
	$bdd->query("INSERT INTO artiste(login, password, name, style, description, mail) VALUES('$login', '$password', '$name', '$style', '$description','$mail')");

}

function login($login, $password){ // Connexion
global $bdd;
	$password=sha1($password);
$result=$bdd->query("SELECT COUNT(id) FROM artiste WHERE login='$login' AND password='$password' ");
$num = $result->fetchColumn();
if ($num==1){
	return true;
	}else{
		return false;
	}
}

function veriflogin($login){ // Vérification du login
global $bdd;
$result=$bdd->query("SELECT COUNT(id) FROM artiste WHERE login='$login'");
$num = $result->fetchColumn();
if ($num!=1){
	return true;
	}else{
		return false;
	}
}


function recupid($login, $password){
	global $bdd;
	$result=$bdd->query("SELECT id FROM artiste WHERE login='$login' AND password='$password' ");
	$res = $result-> fetch();
	return $res; 
}

function id($login, $password){
	global $bdd;
$req = $bdd->prepare('SELECT id FROM artiste WHERE login = :login AND password = :password');
$req->execute(array(
    'login' => $login,
    'password' => $password));

$resultat = $req->fetch();
return $resultat;
}

function info($id){
	global $bdd;
$res = "SELECT * from artiste where id ='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}



?>
