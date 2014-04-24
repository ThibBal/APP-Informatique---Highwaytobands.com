<?php 


if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
 extract($_POST);
 $password = sha1($password); 
 include ('modeles/membre.php');
 
 $donnee = verification($login);

 if( $donnee['password'] != $password) {
   $_SESSION['message']='Erreur';
   

   header ('Location: index.php?page=accueil');

 }  else {
   $_SESSION['login'] = $login;
   $_SESSION['id'] = $donnee['id'];
   
   $_SESSION['message']='Bienvenue';

   header ('Location: index.php?page=accueil');
 } 

 // }else {
//   echo '<p>Vous avez oublié de remplir un champ.</p>';
//   exit;
}

include ('vues/header.php');

?>
