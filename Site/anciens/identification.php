<?php
 session_start();
$_SESSION["login"]=$_POST["login"];
$_SESSION["password"]=$_POST["password"];
  
try {$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');}
catch (Exception $e) {die("Problème d'accès");}
  
if(($_SESSION["login"] == "") or($_SESSION["password"] == "")) {
    echo "Veuillez remplir les champs";
}
else {
    $result = $bdd->query("SELECT COUNT(*) FROM membre WHERE login='".$_SESSION['login']."' AND password='".$_SESSION['password']."'")->fetch();
    if ($result['COUNT(*)'] == 1){
$_SESSION['login']=$login;
$_SESSION['id']=$id;
    }
    	
         
}

include ('accueil.php');
?>
