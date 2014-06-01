<?php
include_once('modeles/forum.php');
include('controleurs/bdd.php');
 
$req1 = listeRubrique();


include ('vues/forum_rubrique.php');  
?>
