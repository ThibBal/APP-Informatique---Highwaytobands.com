<meta charset="utf-8" />
<?php

$login=$_POST['login']; // Changement des variables pour les étudier 
$password=$_POST['password']; 
$password2=$_POST['password2']; 
$mail=$_POST['mail']; 
$zipcode=$_POST['zipcode'];
$name=$_POST['name'];
//$photo=$_POST['photo'];
//}


$photo = "";

if(!empty($_POST['photo'])){
$photo = mysql_real_escape_string(htmlspecialchars($_POST['photo']));
}

if($password == $password2){
if(strlen($_POST['password'])>=5){ // Taille du mot de passe >= 5 caractères

		$password=sha1($password2); // Cryptage du mot de passe
 // On vérifie la taille du mot de passe

		require('modeles/membre.php'); // Unicité du login
		$verif=veriflogin($login);
			if($verif){
				inscription($login, $password,$mail, $zipcode, $photo, $name);
				$donnee = verification($login);
				$nomOrigine = $_FILES['photo']['name'];
				$elementsChemin = pathinfo($nomOrigine);
				$extensionFichier = $elementsChemin['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
				$nomDestination = $donnee['id'].".".$extensionFichier; // Nom du fichier : id.extension
				
				$message = 'Inscription réussie';

if (!(in_array($extensionFichier, $extensionsAutorisees))) {
$message = "Le fichier n'a pas l'extension attendue";
} else {    
// Copie dans le repertoire du script avec un nom
// incluant l'heure a la seconde pres 
$repertoireDestination = dirname(dirname(__FILE__))."/"."img"."/"."membres"."/"; // Copie dans le répertoire img
//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;
ajout_photo($donnee['id'], $nomDestination); // Ajout de l'attribu photo au membre
move_uploaded_file($_FILES["photo"]["tmp_name"], 
                                 $repertoireDestination.$nomDestination);

   // $message = "Le fichier temporaire ".$_FILES["photo"]["tmp_name"].
     //       " a été déplacé vers ".$repertoireDestination.$nomDestination;

}

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