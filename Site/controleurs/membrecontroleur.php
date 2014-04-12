<meta charset="utf-8" />
<?php

//if(isset($_POST['login'], $_POST['password'], $_POST['password2'], $_POST['mail'], $_POST['zipcode']!='') // On vérifie que le champs a été envoyé
//{ 
	//connexion bdd

$login=$_POST['login']; // Changement des variables pour les étudier 
$password=$_POST['password']; 
$password2=$_POST['password2']; 
$mail=$_POST['mail']; 
$zipcode=$_POST['zipcode']; 
//}

if($password == $password2){
	if(strlen($_POST['password'])>=5) // Taille du mot de passe >= 5 caractères
	{
	$password=sha1($password2); // Cryptage du mot de passe
	 // On vérifie la taille du mot de passe

			require('modeles/membremodele.php'); // Unicité du login
			$verif=veriflogin($login);
			if($verif){
				inscription($login, $password,$mail, $zipcode);
			}else{
				$_SESSION['message']='Pseudo déjà utilisé !';
				
			}
		}else{ 
			$_SESSION['message']='Mot de passe trop court !';
		}
	}else{ 
		$_SESSION['message']='Mot de passe incorrect';
	}



	header ('Location: index.php?page=accueilcontroleur');
	
	?>