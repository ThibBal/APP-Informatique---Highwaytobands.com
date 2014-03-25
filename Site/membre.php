<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>

<body>

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO membre(login, password, mail, zipcode, photo) VALUES(:login, :password, :mail, :zipcode)');
$req->execute(array(
	'login' => $_POST['login'],
	'password' => $_POST['password'],
	'mail' => $_POST['mail'],
	'zipcode' => $_POST['zipcode'],
	
	));

echo 'Le membre a bien été ajouté !';
?>

</body>
</html>