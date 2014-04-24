<?php

function inscription($login, $password,$mail, $zipcode, $photo){
global $bdd; // Inscription au site
	$bdd->query("INSERT INTO membre(login, password, mail, zipcode, photo) VALUES('$login', '$password', '$mail', '$zipcode', '$photo')");

}

function login($login, $password){ // Connexion
global $bdd;
	$password=sha1($password);
$result=$bdd->query("SELECT COUNT(id) FROM membre WHERE login='$login' AND password='$password' ");
$num = $result->fetchColumn();
if ($num==1){
	return true;
	}else{
		return false;
	}
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
$sql = "SELECT id, password from membre where login ='$login'";
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

function id($login, $password){
	global $bdd;
$req = $bdd->prepare('SELECT id FROM membre WHERE login = :login AND password = :password');
$req->execute(array(
    'login' => $login,
    'password' => $password));

$resultat = $req->fetch();
return $resultat;
}

function info($id){
	global $bdd;
$res = "SELECT * from membre where id ='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}



?>
