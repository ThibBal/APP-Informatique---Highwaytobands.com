<?php

if(isset($_POST['login'], $_POST['password'])){ 
$login=$_POST['login']; // Changement des variables pour les étudier 
$password=$_POST['password']; 

require('modeles/membremodele.php');
$connexion=login($login, $password);
$id=recupid($login, $password);
if ($connexion){

	$_SESSION['login']=$login;
	$_SESSION['id']= $id['id'];
  
	header ('Location: index.php?page=accueilcontroleur');
}

else{
	echo('Identifiants incorrects');
	header ('Location: index.php?page=accueilcontroleur');

}
}

include('vues/headervue.php');

?>