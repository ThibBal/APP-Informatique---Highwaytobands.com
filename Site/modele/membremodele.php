<?php
try {$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');} // Connexion à la bdd
catch (Exception $e) {die("Problème d'accès");}
 

function inscription($login, $password,$mail, $zipcode){
global $bdd; // Inscription au site
	$bdd->query("INSERT INTO membre(login, password, mail, zipcode) VALUES('$login', '$password', '$mail', '$zipcode')");
echo 'Le membre a bien été ajouté !';
}

function login($login, $password){ // Connexion
session_start();
global $bdd;
$result=$bdd->query("SELECT COUNT(id) FROM membre WHERE login='$login' AND password='$password' ");
$num = $result->fetchColumn();
if ($num==1){
	$_SESSION['login']=$login;
	$_SESSION['id']=$id;
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

function logout() { // Déconnexion
	global $bdd;
    session_start();
    unset($_SESSION);
    session_destroy();
    header ('Location: header.php');


}

?>
