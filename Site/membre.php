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


<?php
$con=mysqli_connect("localhost","root","","mydb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO membre (login, password, zipcode, mail, photo)
VALUES
('$_POST[login]','$_POST[password]','$_POST[zipcode]','$_POST[mail]','$_POST[photo]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "Vous êtes inscrit";

mysqli_close($con);
?>

