
<?php
include_once('modeles/forum.php');
include('controleurs/bdd.php');
  
$req  = afficherSujet1();
$req5 = afficherRubrique1();

include ('vues/forum_sujet.php');
               
?>
