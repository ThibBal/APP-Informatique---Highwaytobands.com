<meta charset="utf-8" />
<?php
if(isset($_POST['CGU'])){
$statut=$_POST['statut']; // Changement des variables pour les étudier 
$CGU=$_POST['CGU']; 

if($statut=='membre'){

include 'vues/inscription_membre.php';

}

if($statut=='artiste'){

include 'vues/inscription_artiste.php';

}

if($statut=='salle'){

include 'vues/inscription_salle.php';

}

}else{


include 'vues/inscription.php';

}
?>

