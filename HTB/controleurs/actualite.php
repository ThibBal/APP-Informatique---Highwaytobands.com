<meta charset="utf-8" />
<?php


if(isset($_SESSION['statut'])){

if(isset($_POST['titre'])){

	$titre=mysql_real_escape_string(htmlspecialchars($_POST['titre']));
	$contenu=mysql_real_escape_string(htmlspecialchars($_POST['contenu']));
	$date=date("YmdHis");

	if($_SESSION['statut']=='salle'){
		$salle_id=$_SESSION['id'];
		$salle_name=mysql_real_escape_string(htmlspecialchars($_SESSION['name']));
		$artiste_id='';
		$artiste_name='';

	require('modeles/actualite.php');
	creer_actu($artiste_id, $salle_id, $artiste_name, $salle_name, $titre, $contenu, $date);
	$_SESSION['temp'] = 'Article posté';
	}

	if($_SESSION['statut']=='artiste'){
		$artiste_id=$_SESSION['id'];
		$artiste_name=mysql_real_escape_string(htmlspecialchars($_SESSION['name']));
		$salle_id='';
		$salle_name='';

	require('modeles/actualite.php');
	creer_actu($artiste_id, $salle_id, $artiste_name, $salle_name, $titre, $contenu, $date);
	$_SESSION['temp'] = 'Article posté';
	}

		include 'vues/actualite.php';

	
}else{

include 'vues/actualite.php';

}

}else{
		$message = 'Seuls une salle et un artiste peuvent poster une actualité';
		 $_SESSION['temp'] = $message;
				header('Location: ' . $_SERVER['HTTP_REFERER']); 
}

$message='Article posté';

 $_SESSION['temp'] = $message;

	?>
