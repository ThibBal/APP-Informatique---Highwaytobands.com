<?php

require('modeles/membre.php');
require('modeles/artiste.php');

$membres=liste_membre();
$artistes=liste_artiste();


include('vues/liste_membre.php');



?>

