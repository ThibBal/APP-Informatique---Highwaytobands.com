<?php

function creation_concert($artiste, $salle, $date, $description, $price, $name, $valider, $artiste_id, $salle_id){
global $bdd; // Création d'un concert
	$bdd->query("INSERT INTO concert(artiste, salle, date, description, price, name, valider, artiste_id, salle_id) VALUES('$artiste', '$salle', '$date', '$description', '$price', '$name', '$valider', '$artiste_id', '$salle_id')");

}

function info_concert($id){
	global $bdd;
$res = "SELECT * from concert where id ='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}

function supprimer_concert($id){
global $bdd; 
	$bdd->query("DELETE FROM concert WHERE id='$id'");
	$bdd->query("DELETE FROM participation WHERE concert_id='$id'");

}

function info_artiste_concert($id){
	global $bdd;
	$result=$bdd->query("SELECT * FROM artiste WHERE id='$id'");
	$res = $result-> fetch();
	return $res; 
}

function info_salle_concert($id){
	global $bdd;
	$result=$bdd->query("SELECT * FROM salle WHERE id='$id'");
	$res = $result-> fetch();
	return $res; 
}

function liste_concert(){ 
	global $bdd;
$res = "SELECT * from concert";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_concert_valide(){ 
	global $bdd;
$res = "SELECT * from concert WHERE valider='1' AND date > CURDATE() ORDER BY DATE";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function liste_concert_bientot(){ 
	global $bdd;
$res = "SELECT * from concert WHERE DATE > CURDATE() ORDER BY Date";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function concert_valider_artiste($id){ // Liste des concerts à valider d'un atiste
	global $bdd;
$res = "SELECT * from concert where artiste_id='$id' and valider='0' ORDER BY DATE";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function concert_valider_salle($id){ // Liste des concerts à valider d'une salle
	global $bdd;
$res = "SELECT * from concert where salle_id='$id' and valider='0' ORDER BY DATE";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function concert_artiste($id){ // Liste des concerts d'un atiste
	global $bdd;
$res = "SELECT * from concert where artiste_id='$id' and valider='1'ORDER BY DATE";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function concert_artiste_bientot($id){ // Liste des concerts d'un atiste dans le futur
	global $bdd;
$res = "SELECT * from concert where artiste_id='$id' and valider='1' AND date > CURDATE() ORDER BY DATE";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function concert_salle($id){ // Liste des concerts d'une salle
	global $bdd;
$res = "SELECT * from concert where salle_id='$id' and valider='1' ORDER BY DATE";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function concert_salle_bientot($id){ // Liste des concerts d'une salle dans le futur
	global $bdd;
$res = "SELECT * from concert where salle_id='$id' and valider='1' AND date > CURDATE() ORDER BY DATE";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function dernier_concert(){ // Récupère les informations du dernier concert
	global $bdd;
$res = "SELECT * from concert ORDER BY id DESC LIMIT 1" ;
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));
$data = $req-> fetch();
 	return $data;
}

function validation($id){ // Validation d'un concert
global $bdd; 
	$bdd->query("UPDATE concert SET valider='1' WHERE id='$id'");

}

function validation_s($name, $id){  // Validation d'un concert
global $bdd; 
	$bdd->query("UPDATE concert SET salle='$name' WHERE id='$id'");

}

function validation_a($name, $id){  // Validation d'un concert
global $bdd; 
	$bdd->query("UPDATE concert SET artiste='$name' WHERE id='$id'");

}

function detection_concert($cp){
global $bdd;
$res = "SELECT * from salle WHERE departement='$cp'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));
 	return $req;
}

?>