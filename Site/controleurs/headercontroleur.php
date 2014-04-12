<?php

if(isset($_POST['login'], $_POST['password'])){ 
$login=$_POST['login']; // Changement des variables pour les étudier 
$password=$_POST['password']; 

require('modeles/membremodele.php');
$connexion=login($login, $password);

if ($connexion){
    $_SESSION['message']='Bienvenue';
	$_SESSION['login']=$login;
	$_SESSION['password']=$password;
	$resultat=recupid($login, $password);
	$_SESSION['id']= $resultat['id'];
  
	header ('Location: index.php?page=accueilcontroleur');
}

else{
	$_SESSION['message']='Identifiants incorrects';
	header ('Location: index.php?page=accueilcontroleur');

}
}

include('vues/headervue.php');

?>