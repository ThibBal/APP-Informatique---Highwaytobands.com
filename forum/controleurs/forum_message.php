<?php
include_once('modeles/forum.php');
include('controleurs/bdd.php');

$req7 = liste_message($_GET['S']);
$req  = listeMessage();
$req3 = afficherRubrique2();
$req4 = afficherSujet2();
$req5 = pseudoSujet2();
include ('vues/forum_message.php');              
?>
