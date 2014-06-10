<meta charset="utf-8" />
<?php
if(isset($_SESSION['statut'])){
	if(($_SESSION['statut']=='salle')||($_SESSION['statut']=='artiste')){

		if(isset($_POST['CGU'])){
	$name=$_POST['name']; // Changement des variables pour les étudier  
	$salle_id=$_POST['salle']; 
	$artiste_id=$_POST['artiste'];
	//$salle_nom=$_POST['salle_nom']; 
	//$artiste_nom=$_POST['artiste_nom'];
	$date=$_POST['date'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$valider=0;

	if($_SESSION['statut']=='artiste'){
		$artiste=$_SESSION['name'];
		$salle='';
	}

	if($_SESSION['statut']=='salle'){
		$artiste='';
		$salle=$_SESSION['name'];
	}	


	require('modeles/concert.php');
	//creation_concert($artiste, $salle, $date, $description, $price, $name, $valider, $artiste_id, $salle_id);
	//creation_concert($artiste, $salle, $date, $description, $price, $name, $valider, $artiste_id, $salle_id);
	creation_concert($artiste, $salle, $date, $description, $price, $name, $valider, $artiste_id, $salle_id);
	//$info= dernier_concert();	
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
	$message = 'Inscrivez-vous pour pouvoir créer un concert';
	$_SESSION['temp'] = $message;
	include 'vues/inscription.php';
}

?>
