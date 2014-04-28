<meta charset="utf-8" />
<?php

$login=$_POST['login']; // Changement des variables pour les étudier 
$password=$_POST['password']; 
$password2=$_POST['password2']; 
$name=$_POST['name'];
$style=$_POST['style'];
$description=$_POST['description'];
$mail=$_POST['mail']; 


 $photo = "";

if(!empty($_POST['photo'])){
$photo = mysql_real_escape_string(htmlspecialchars($_POST['photo']));
}

if($password == $password2){
	if(strlen($_POST['password'])>=5) // Taille du mot de passe >= 5 caractères
	{
	$password=sha1($password2); // Cryptage du mot de passe
	 // On vérifie la taille du mot de passe

			require('modeles/artiste.php'); 
			$verif=veriflogin_artiste($login); // Unicité du login
			if($verif){
				inscription_artiste($login, $password, $name, $style, $description, $mail, $photo);
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
	?>