<?php 


if(isset($_POST['login'])){
 $login=$_POST['login'];
 $password=$_POST['password'];
 $password = sha1($password); 
 include ('modeles/membre.php');
 include ('modeles/artiste.php');
 include ('modeles/salle.php');

 
 $donnee = verification($login);

 if( $donnee['password'] != $password) {

 $donnee2 = connexion_artiste($login);

 if( $donnee2['password'] != $password) {

 $donnee3 = connexion_salle($login);

 if( $donnee3['password'] != $password) {

 	$message ='Mot de passe incorrect';
    $_SESSION['temp'] = $message;
  header ('Location: index.php?page=accueil');

 }  else {
   $_SESSION['login'] = $login;
   $_SESSION['name'] = $donnee3['name'];
   $_SESSION['id'] = $donnee3['id'];
   $message= 'Bienvenue';
  $_SESSION['temp'] = 'Bienvenue';
  $_SESSION['statut'] = 'salle';
   header ('Location: index.php?page=compte_perso');
 } 

 }  else {
   $_SESSION['login'] = $login;
    $_SESSION['name'] = $donnee2['name'];
   $_SESSION['id'] = $donnee2['id'];
   $message= 'Bienvenue';
  $_SESSION['temp'] = 'Bienvenue';
    $_SESSION['statut'] = 'artiste';
   header ('Location: index.php?page=compte_perso');
 } 

  }  else {
   $_SESSION['login'] = $login;
   $_SESSION['name'] = $donnee['name'];
   $_SESSION['id'] = $donnee['id'];
   $message= 'Bienvenue';
  $_SESSION['temp'] = 'Bienvenue';
  $_SESSION['statut'] = 'membre';
   header ('Location: index.php?page=compte_perso');
 } 

}

include ('vues/header.php');

?>