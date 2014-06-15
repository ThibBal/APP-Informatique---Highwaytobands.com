<?php>

function suppression_utilisateur($login){
global bdd;
	$result=$bdd->query("DELETE * FROM membre WHERE login='$login'");
}

function suppression_salle($login){
global bdd;
	$result=$bdd->query("DELETE * FROM salle WHERE login='$login'");
}

function suppression_event($login){
global bdd;
	$result=$bdd->query("DELETE * FROM concert WHERE login='$login'");

}

function suppression_artiste($login){
global bdd;
	$result=$bdd->query("DELETE * FROM artiste WHERE login='$login'");

}

function ajout_style($nouveau_style){
global bdd;
	$result=$bdd->query("INSERT INTO style(nom) VALUE('$nouveau_style') ");
}

function suppression_style($suppr_style){
global $bdd;
	$result=$bdd->query("DELETE * FROM style WHERE name='$suppr_style'");

}

function declarer_com($id){

}

function suppression_com($id){
global bdd;
	$result=$bdd->query("DELETE * FROM message WHERE id='$id'");

}

<?>
