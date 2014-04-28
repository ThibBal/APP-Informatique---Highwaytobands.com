<?php 


if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
 extract($_POST);
 $password = sha1($password); 
 include ('modeles/membre.php');
 include ('modeles/artiste.php');
 include ('modeles/salle.php');
 include ('modeles/user.php');
 
 $donnee = verification($login);

 if( $donnee['password'] != $password) {

   $message ='Mot de passe incorrect';
    $_SESSION['temp'] = $message;
   //exit;
   //header ('Location: index.php?page=accueil');

 }  else {
   $_SESSION['login'] = $login;
   $_SESSION['id'] = $donnee['id'];
   $message= 'Bienvenue';
  $_SESSION['temp'] = 'Bienvenue';
   header ('Location: index.php?page=accueil');
 } 


}

include ('vues/header.php');

?>
