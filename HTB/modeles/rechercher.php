<?php 

function recherche_membre($rechercher){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * FROM membre WHERE name LIKE '%$rechercher%' OR zipcode LIKE '$rechercher%' OR login LIKE '%$rechercher%' ";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}


function recherche_salle($rechercher){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * FROM salle WHERE name LIKE '%$rechercher%' OR zipcode LIKE '$rechercher%' OR login LIKE '%$rechercher%'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}


function recherche_artiste($rechercher){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * FROM artiste WHERE name LIKE '%$rechercher%' OR style='$rechercher' OR login LIKE '%$rechercher%' ";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function recherche_concert($rechercher){ // Récupère les informations d'un membre
	global $bdd;
$res = "SELECT * FROM concert WHERE valider = '1' AND name LIKE '%$rechercher%' OR artiste LIKE '%$rechercher%' OR salle LIKE '%$rechercher%' ";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}


function recup_nb_recherche(){
global $bdd;
$nb_artiste=$bdd->query("SELECT COUNT(id) FROM artiste WHERE name='%$rechercher%' OR style='%$rechercher%'"); 
$nb_salle=$bdd->query("SELECT COUNT(id) FROM salle WHERE name='%$rechercher%' OR zipcode='$rechercher'");
$nb_event=$bdd->query("SELECT COUNT(id) FROM artiste WHERE name='%$rechercher%' OR style='%$rechercher%' OR artiste='%$rechercher%' OR salle='%$rechercher%'");
$nb_membre=$bdd->query("SELECT COUNT(id) FROM artiste WHERE login='$rechercher%' OR zipcode='$rechercher'");
}


?>