<meta charset="utf-8" />
<?php
if(isset($_SESSION['statut'])){
if(($_SESSION['statut']=='salle')||($_SESSION['statut']=='artiste')){

if(isset($_POST['CGU'])){
	$name=$_POST['name']; // Changement des variables pour les étudier  
	$salle=$_POST['salle']; 
	//$salle_nom=$_POST['salle_nom']; 
	$artiste=$_POST['artiste'];
	//$artiste_nom=$_POST['artiste_nom'];
	$date=$_POST['date'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$valider=0;
		
	
	require('modeles/concert.php');
	creation_concert($artiste, $salle, $date, $description, $price, $name, $valider);
	//$info= dernier_concert();

	if($_SESSION['statut']=='salle'){

	//confirmation_artiste($artiste);
	}

	if($_SESSION['statut']=='artiste'){
	//confirmation_salle($salle);
	}
	
	//$id=$info['id'];
	//$valider=$info['valider']+1;
	//validation($id, $valider);
		$message = 'Proposition de concert envoyée';
		 $_SESSION['temp'] = $message;
	header ('Location: index.php?page=accueil'); 
	


}else{
	require('modeles/artiste.php');
	$artistes=liste_artiste();
	require('modeles/salle.php');
	$salles=liste_salle();



	// $_SESSION['temp'] = $message;
	include 'vues/creation_concert.php';
}

}else{
		$message = 'Seuls une salle et un artiste peuvent créer un évènement';
		 $_SESSION['temp'] = $message;
		 header ('Location: index.php?page=accueil'); 
}

}else{
	$message = 'Inscrivez-vous';
		 $_SESSION['temp'] = $message;
		 include 'vues/inscription.php';
}

?>
