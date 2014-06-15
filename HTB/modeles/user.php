<?php 

function connexion_($login){
global $bdd;
$sql = "SELECT id, password from membre, artiste, salle where membre.login ='$login' or salle.login ='$login' or artiste.login ='$login'";
$req = $bdd->query($sql) or die(print_r($bdd->errorInfo()));
 	$donnee = $req->fetch();
 	return $donnee;
}

function auteur_message($id){
	global $bdd;
$res = "SELECT * from membre where id ='$id'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}


function liste_style(){
	global $bdd;
$res = "SELECT * from style ORDER BY style ASC";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	 	return $req;
}

function mail_admin(){
	global $bdd;
$res = "SELECT * from admin where id ='1'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}

function modifier_mail($mail){
global $bdd; 
	$bdd->query("UPDATE admin SET mail='$mail' WHERE id='1'");

}



?>

