<meta charset="utf-8" />
<?php
if(isset($_POST['CGU'])){
$statut=$_POST['statut']; // Changement des variables pour les étudier 
$CGU=$_POST['CGU']; 

if($statut=='membre'){

header ('Location: index.php?page=inscription_membre');

}

if($statut=='artiste'){
require('modeles/style.php');
$style = liste_style();
header ('Location: index.php?page=inscription_artiste'); 

}

if($statut=='salle'){

header ('Location: index.php?page=inscription_salle'); 

}

}else{


include 'vues/inscription.php';

}
?>

