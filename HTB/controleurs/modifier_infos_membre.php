<meta charset="utf-8" />
<?php
require('modeles/membre.php');
$data=info($_SESSION['id']);
//$login=$_POST['login']; // Changement des variables pour les étudier 
//$password=$_POST['password']; 
//$password2=$_POST['password2']; 
//$name=$_POST['name'];
//$style=$_POST['style'];
//$description=$_POST['description'];
//$mail=$_POST['mail']; 



$message = $_POST['name'];
 $_SESSION['temp'] = $message;

include 'vues/modifier_infos_membre.php';



	?>