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


----

<?php 


if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
 extract($_POST);
 $password = sha1($password); 


 include ('modeles/membre.php');
 include ('modeles/artiste.php');
  include ('modeles/salle.php');
 $donnee = verification($login);
 $donnee2 = connexion_artiste($login);
 $donnee3 = connexion_salle($login);

 if(($donnee['password'] != $password)&&( $donnee2['password'] != $password)&&( $donnee3['password'] != $password)){

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

----

<?php 


if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
 extract($_POST);
 $password = sha1($password); 


 include ('modeles/membre.php');
 include ('modeles/artiste.php');
  include ('modeles/salle.php');
 $donnee = verification($login);

 if($donnee['password'] = $password){

   $_SESSION['login'] = $login;
   $_SESSION['id'] = $donnee['id'];
 
   header ('Location: index.php?page=accueil');

 }else{ 
  $donnee = connexion_artiste($login);

  if($donnee['password'] = $password){
  	$_SESSION['login'] = $login;
   $_SESSION['id'] = $donnee['id'];
 
   header ('Location: index.php?page=accueil');
}else{
  $donnee = connexion_salle($login);

 if($donnee['password'] = $password){
 	$_SESSION['login'] = $login;
   $_SESSION['id'] = $donnee['id'];
 
   header ('Location: index.php?page=accueil');

}

}
}

$message ='Erreur de mot de passe !!';
   
 


 // }else {
//   echo '<p>Vous avez oublié de remplir un champ.</p>';
//   exit;
}

include ('vues/header.php');

?>
