<?php 

function recherche_salle($rechercher){  	
global $bdd; //Recherche les differentes salles
$result=$bdd-> query("SELECT id FROM salle WHERE name='%$rechercher%' OR zipcode='$rechercher'");
$res=$result-> fetch();
return $res;
}


function recherche_artiste($rechercher){  	
global $bdd; //Recherche les differents artistes
$result=$bdd-> query("SELECT id FROM artiste WHERE name='%$rechercher%' OR style='%$rechercher%'");
$res=$result-> fetch();
return $res;
}


function recherche_event($rechercher){  	
global $bdd; //Recherche les differents events
$result=$bdd-> query("SELECT id FROM evenement WHERE name='%$rechercher%' OR style='%$rechercher%' OR artiste='%$rechercher%' OR salle='%$rechercher%'");
$res=$result-> fetch();
return $res;
}


function recherche_membre($rechercher){  	
global $bdd; //Recherche les differents membres
$result=$bdd-> query("SELECT id FROM membre WHERE login='$rechercher%' OR zipcode='$rechercher'");
$res=$result-> fetch();
return $res;
}

function recup_nb_recherche(){
global $bdd;
$nb_artiste=$bdd->query("SELECT COUNT(id) FROM artiste WHERE name='%$rechercher%' OR style='%$rechercher%'"); 
$nb_salle=$bdd->query("SELECT COUNT(id) FROM salle WHERE name='%$rechercher%' OR zipcode='$rechercher'");
$nb_event=$bdd->query("SELECT COUNT(id) FROM artiste WHERE name='%$rechercher%' OR style='%$rechercher%' OR artiste='%$rechercher%' OR salle='%$rechercher%'");
$nb_membre=$bdd->query("SELECT COUNT(id) FROM artiste WHERE login='$rechercher%' OR zipcode='$rechercher'");
}


?>