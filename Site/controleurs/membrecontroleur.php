<meta charset="utf-8" />
<?php


$_FILES['photo']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
$_FILES['photo']['type']     //Le type du fichier. Par exemple, cela peut être « image/png ».
$_FILES['photo']['size']     //La taille du fichier en octets.
$_FILES['photo']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['photo']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.

$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ){


//if(isset($_POST['login'], $_POST['password'], $_POST['password2'], $_POST['mail'], $_POST['zipcode']!='') // On vérifie que le champs a été envoyé
//{ 
	

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