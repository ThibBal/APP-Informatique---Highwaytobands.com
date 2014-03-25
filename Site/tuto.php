<?php
session_start();
$_SESSION["login"]=$_POST["login"];
$_SESSION["password"]=$_POST["password"];
  
try {$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');}
catch (Exception $e) {die("Problème d'accès");}
  
if(($_SESSION["login"] == "") or($_SESSION['password'] == "")) {
    echo "Veuillez remplir les champs";
}
else {
    $st = $bdd->query("SELECT COUNT(*) FROM membre WHERE login='".$_SESSION["login"]."' AND password='".$_SESSION["password"]."'")->fetch();
    if ($st['COUNT(*)'] == 1)
         echo 'Bonjour ' . $_SESSION['login'];
}

?>


<?php 
$bdd = new PDO('mysql:host=localhost; dbname=mydb', 'root', '') 

$req = $bdd->prepare('SELECT id FROM membre WHERE login = :login AND password = :password');
$req->execute(array(
    'login' => $login,
    'password' => $password));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Login / Mot de passe incorrect !';
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['login'] = $login;
    echo 'Vous êtes connecté !';
}

?>