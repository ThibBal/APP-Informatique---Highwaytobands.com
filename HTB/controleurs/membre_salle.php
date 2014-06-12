<meta charset="utf-8" />
<?php

$login=$_POST['login']; // Changement des variables pour les étudier 
$password=$_POST['password']; 
$password2=$_POST['password2']; 
$mail=$_POST['mail']; 
$zipcode=$_POST['zipcode'];
$name=mysql_real_escape_string(htmlspecialchars($_POST['name']));
$description=mysql_real_escape_string(htmlspecialchars($_POST['description']));
$capacity=$_POST['capacity'];
$phone=$_POST['phone'];
$hours=$_POST['hours'];
//$adress=$_POST['adress'];
$numero=$_POST['numero'];
$voie=$_POST['voie'];
$ville=$_POST['ville'];
$pays=$_POST['pays'];



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
				//inscription_salle($login, $password, $name, $capacity, $zipcode, $mail, $phone, $adress, $description, $hours, $photo);
			//	inscription_salle($login, $password, $name, $capacity, $zipcode, $mail, $phone, $adress, $hours, $photo, $description);
				inscription_salle2($login, $photo, $mail, $name, $password, $description, $hours, $capacity, $phone, $numero, $voie, $ville, $pays, $zipcode);
$donnee = connexion_salle($login);
				$nomOrigine = $_FILES['photo']['name'];
				$elementsChemin = pathinfo($nomOrigine);
				$extensionFichier = $elementsChemin['extension'];
				$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
				$nomDestination = $donnee['id'].".".$extensionFichier; // Nom du fichier : id.extension
				ajout_photo_salle($donnee['id'], $nomDestination); // Ajout de l'attribu photo au membre
				$message = 'Inscription réussie';

if (!(in_array($extensionFichier, $extensionsAutorisees))) {
$message = "Le fichier n'a pas l'extension attendue";
} else {    

$repertoireDestination = dirname(dirname(__FILE__))."/"."img"."/"."salles"."/"; // Copie dans le répertoire img
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