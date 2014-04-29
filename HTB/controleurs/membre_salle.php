<meta charset="utf-8" />
<?php

$login=$_POST['login']; // Changement des variables pour les étudier 
$password=$_POST['password']; 
$password2=$_POST['password2']; 
$mail=$_POST['mail']; 
$zipcode=$_POST['zipcode'];
$name=$_POST['name'];
$description=$_POST['description'];
$capacity=$_POST['capacity'];
$phone=$_POST['phone'];
$hours=$_POST['hours'];
$adress=$_POST['adress'];
$CGU=$_POST['CGU'];



//$photo=$_POST['photo'];
//}

  $photo = "";

if(!empty($_POST['photo'])){
$photo = mysql_real_escape_string(htmlspecialchars($_POST['photo']));
}

if($password == $password2){
	if(strlen($_POST['password'])>=5) // Taille du mot de passe >= 5 caractères
	{
	$password=sha1($password2); // Cryptage du mot de passe
	 // On vérifie la taille du mot de passe

			require('modeles/salle.php'); // Unicité du login
			$verif=veriflogin_salle($login);
			if($verif){
				inscription_salle($login, $password, $name, $capacity, $zipcode, $mail, $phone, $adress, $description, $hours, $photo);

			$message='Vous êtes bien inscrit !';
			}else{
				$message='Pseudo déjà utilisé !';
				
			}
		}else{ 
			$message='Mot de passe trop court !';
		}
	}else{ 
		$message='Mot de passe incorrect';
	}

 $_SESSION['temp'] = $message;

	header ('Location: index.php?page=accueil');
	
	?>