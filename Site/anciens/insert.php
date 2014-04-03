<?php
try {$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');}
catch (Exception $e) {die("Problème d'accès");}
 


$req = $bdd->prepare('INSERT INTO membre(login, password, mail, zipcode, photo) VALUES(:login, :password, :mail, :zipcode, :photo)');
$req->execute(array(
	'login' => $_POST['login'],
	'password' => $_POST['password'],
	'mail' => $_POST['mail'],
	'zipcode' => $_POST['zipcode'],
	'photo' => $_POST['photo'],
	
	));

echo 'Le membre a bien été ajouté !';
?>