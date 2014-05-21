<meta charset="utf-8" />
<?php

if($_SESSION['statut']=='membre'){ 

require('modeles/membre.php');
$data=info($_SESSION['id']);

if(!empty($_POST)){
$login=$_POST['login']; // Changement des variables pour les étudier 
//$password=$_POST['password']; 
//$password2=$_POST['password2']; 
$name=$_POST['name'];
$zipcode=$_POST['zipcode'];
//$description=$_POST['description'];
$mail=$_POST['mail'];
$id=$_SESSION['id'];

modifications_membre($id, $login, $mail, $zipcode, $name);
$message='Informations correctement modifiées';
$_SESSION['temp'] = $message;

include 'vues/accueil.php';

}

}

if($_SESSION['statut']=='artiste'){ 

require('modeles/artiste.php');
$data=info_artiste($_SESSION['id']);

if(!empty($_POST)){
$login=$_POST['login']; // Changement des variables pour les étudier 
//$password=$_POST['password']; 
//$password2=$_POST['password2']; 
$name=$_POST['name'];
$zipcode=$_POST['zipcode'];
//$description=$_POST['description'];
$mail=$_POST['mail'];
$id=$_SESSION['id'];

modifications_artiste($id, $login, $mail, $zipcode, $name);
$message='Informations correctement modifiées';
$_SESSION['temp'] = $message;

include 'vues/accueil.php';


}

}

if($_SESSION['statut']=='salle'){ 

require('modeles/salle.php');
$data=info_salle($_SESSION['id']);

if(!empty($_POST)){
$login=$_POST['login']; // Changement des variables pour les étudier 
//$password=$_POST['password']; 
//$password2=$_POST['password2']; 
$name=$_POST['name'];
$zipcode=$_POST['zipcode'];
//$description=$_POST['description'];
$mail=$_POST['mail'];
$id=$_SESSION['id'];

modifications_salle($id, $login, $mail, $zipcode, $name);
$message='Informations correctement modifiées';
$_SESSION['temp'] = $message;

include 'vues/accueil.php';


}

}



include 'vues/modifier_infos.php';



	?>