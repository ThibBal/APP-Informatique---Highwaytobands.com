<?php 


if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
 extract($_POST);
 $password = sha1($password); 
 include ('modeles/membre.php');
 
 $donnee = verification($login);

 if( $donnee['password'] != $password) {
   //$_SESSION['message']='Erreur';
   $message ='Erreur de mot de passe !!';
   //exit;
   

 }  else {
   $_SESSION['login'] = $login;
   $_SESSION['id'] = $donnee['id'];
 
   header ('Location: index.php?page=accueil');
 } 

 // }else {
//   echo '<p>Vous avez oublié de remplir un champ.</p>';
//   exit;
}

include ('vues/header.php');

?>
