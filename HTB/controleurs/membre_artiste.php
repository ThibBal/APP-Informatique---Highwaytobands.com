<meta charset="utf-8" />
<?php

$login=$_POST['login']; // Changement des variables pour les étudier 
$password=$_POST['password']; 
$password2=$_POST['password2']; 
$mail=$_POST['mail']; 
$zipcode=$_POST['zipcode'];
$name=$_POST['name'];
$description=$_POST['description'];
$style=$_POST['style'];
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

			require('modeles/artiste.php'); // Unicité du login
			$verif=veriflogin($login);
			if($verif){
				inscription($login, $password,$mail, $zipcode, $photo, $name, $description, $style);
			}else{
				$_SESSION['message']='Pseudo déjà utilisé !';
				
			}
		}else{ 
			$_SESSION['message']='Mot de passe trop court !';
		}
	}else{ 
		$_SESSION['message']='Mot de passe incorrect';
	}



	header ('Location: index.php?page=accueil');
	
	?>