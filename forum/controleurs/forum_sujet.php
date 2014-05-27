
<?php
include('modeles/forum.php');


$req8 = liste($_GET['R']);  
$req  = afficherSujet1();
$req5 = afficherRubrique1();

include ('vues/forum_sujet.php');
               
?>
