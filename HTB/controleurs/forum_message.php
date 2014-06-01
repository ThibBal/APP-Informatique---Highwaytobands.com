<?php
include('modeles/forum.php');
$req7 = liste_message($_GET['S']);
$req8 = liste_message($_GET['S']);
$req  = listeMessage();
$req3 = afficherRubrique2();
$req4 = afficherSujet2();
$req5 = pseudoSujet2();
include ('vues/forum_message.php');              
?>
