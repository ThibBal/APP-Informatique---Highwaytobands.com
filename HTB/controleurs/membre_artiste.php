<meta charset="utf-8" />
<?php

$login=$_POST['login']; // Changement des variables pour les étudier 
$password=$_POST['password']; 
$password2=$_POST['password2']; 
$name=mysql_real_escape_string(htmlspecialchars($_POST['name']));
$style=$_POST['style'];
$description=mysql_real_escape_string(htmlspecialchars($_POST['description']));
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
				$donnee = connexion_artiste($login);
				$nomOrigine = $_FILES['photo']['name'];
				$elementsChemin = pathinfo($nomOrigine);
				$extensionFichier = $elementsChemin['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
				$nomDestination = $donnee['id'].".".$extensionFichier; // Nom du fichier : id.extension
				ajout_photo_artiste($donnee['id'], $nomDestination); // Ajout de l'attribu photo au membre
				$message = 'Inscription réussite';

if (!(in_array($extensionFichier, $extensionsAutorisees))) {
$message = "Le fichier n'a pas l'extension attendue";
} else {    

$repertoireDestination = dirname(dirname(__FILE__))."/"."img"."/"."artistes"."/"; // Copie dans le répertoire img
//   $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

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
	?>