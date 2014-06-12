<meta charset="utf-8" />
<?php

if($_SESSION['statut']=='membre'){ 

	require('modeles/membre.php');
	$data=info($_SESSION['id']);

	if(!empty($_POST)){
		$password=$_POST['password']; 
		$password2=$_POST['password2']; 
		if($password == $password2){
			if(strlen($_POST['password'])>=5){
				$password=sha1($password2); 
				$name=mysql_real_escape_string(htmlspecialchars($_POST['name']));
				$zipcode=$_POST['zipcode'];
				$mail=$_POST['mail'];
				$id=$_SESSION['id'];

				if(!empty($_FILES['fichier'])){
					if($_FILES['fichier']['size']<500000){
						$nomOrigine = $_FILES['fichier']['name'];
						$elementsChemin = pathinfo($nomOrigine);
						$extensionFichier = $elementsChemin['extension'];
						$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
						if (!(in_array($extensionFichier, $extensionsAutorisees))) {
							$message = "Le fichier n'a pas l'extension attendue";
						} else {    
							$nomDestination = $data['photo'];
							$repertoireDestination = dirname(dirname(__FILE__))."/"."img"."/"."membres"."/";
							move_uploaded_file($_FILES["fichier"]["tmp_name"], 
								$repertoireDestination.$nomDestination);

						}

					}else{
						$message= 'Le fichier est trop grand';
					}

				}

				modifications_membre($id, $mail, $zipcode, $name, $password);
				$message='Informations correctement modifiées';
				$_SESSION['temp'] = $message;

				header ('Location: index.php?page=compte_perso');
			}
		}else{
			$_SESSION['temp'] = 'Mot de passe incorrect';

				header ('Location: index.php?page=modifier_infos');

		}

	}
	include 'vues/modifier_infos.php';
}

if($_SESSION['statut']=='artiste'){ 

	require('modeles/artiste.php');
	$data=info_artiste($_SESSION['id']);

	if(!empty($_POST)){
		$password=$_POST['password']; 
		$password2=$_POST['password2']; 
		if($password == $password2){
			if(strlen($_POST['password'])>=5){
				$password=sha1($password2); 
				$name=mysql_real_escape_string(htmlspecialchars($_POST['name']));
				$description=mysql_real_escape_string(htmlspecialchars($_POST['description']));
				$mail=$_POST['mail'];
				$style=$_POST['style'];
				$id=$_SESSION['id'];

				if(!empty($_FILES['fichier'])){
					if($_FILES['fichier']['size']<500000){
						$nomOrigine = $_FILES['fichier']['name'];
						$elementsChemin = pathinfo($nomOrigine);
						$extensionFichier = $elementsChemin['extension'];
						$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
						if (!(in_array($extensionFichier, $extensionsAutorisees))) {
							$message = "Le fichier n'a pas l'extension attendue";
						} else {    
							$nomDestination = $data['photo'];
							$repertoireDestination = dirname(dirname(__FILE__))."/"."img"."/"."artistes"."/";
							move_uploaded_file($_FILES["fichier"]["tmp_name"], 
								$repertoireDestination.$nomDestination);

						}

					}else{
						$message= 'Le fichier est trop grand';
					}

				}

				modifications_artiste($id, $mail, $style, $name, $password, $description);
				$message='Informations correctement modifiées';
				$_SESSION['temp'] = $message;

				header ('Location: index.php?page=compte_perso');
			}
		}else{
			$_SESSION['temp'] = 'Mot de passe incorrect';

				header ('Location: index.php?page=modifier_infos');

		}

	}
	include 'vues/modifier_infos.php';
}

if($_SESSION['statut']=='salle'){ 

	require('modeles/salle.php');
	$data=info_salle($_SESSION['id']);

	if(!empty($_POST)){
		$password=$_POST['password']; 
		$password2=$_POST['password2']; 
		if($password == $password2){
			if(strlen($_POST['password'])>=5){
				$password=sha1($password2); 
				$name=mysql_real_escape_string(htmlspecialchars($_POST['name']));
				$description=mysql_real_escape_string(htmlspecialchars($_POST['description']));
				$mail=$_POST['mail'];
				$hours=mysql_real_escape_string(htmlspecialchars($_POST['hours']));
				$capacity=$_POST['capacity'];
				$phone=$_POST['phone'];
				$numero=$_POST['numero'];
				$zipcode=$_POST['zipcode'];
				$voie=mysql_real_escape_string(htmlspecialchars($_POST['voie']));
				$ville=mysql_real_escape_string(htmlspecialchars($_POST['ville']));
				$pays=$_POST['pays'];
				$id=$_SESSION['id'];

				if(!empty($_FILES['fichier'])){
					if($_FILES['fichier']['size']<500000){
						$nomOrigine = $_FILES['fichier']['name'];
						$elementsChemin = pathinfo($nomOrigine);
						$extensionFichier = $elementsChemin['extension'];
						$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
						if (!(in_array($extensionFichier, $extensionsAutorisees))) {
							$message = "Le fichier n'a pas l'extension attendue";
						} else {    
							$nomDestination = $data['photo'];
							$repertoireDestination = dirname(dirname(__FILE__))."/"."img"."/"."salles"."/";
							move_uploaded_file($_FILES["fichier"]["tmp_name"], 
								$repertoireDestination.$nomDestination);

						}

					}else{
						$message= 'Le fichier est trop grand';
					}

				}

				modifications_salle($id, $mail, $name, $password, $description, $hours, $capacity, $phone, $numero, $voie, $ville, $pays, $zipcode);
				$message='Informations correctement modifiées';
				$_SESSION['temp'] = $message;

				header ('Location: index.php?page=compte_perso');
			}
		}else{
			$_SESSION['temp'] = 'Mot de passe incorrect';

				header ('Location: index.php?page=modifier_infos');

		}

	}
	include 'vues/modifier_infos.php';
}




?>