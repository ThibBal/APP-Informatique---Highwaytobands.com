<?php

require('modeles/membre.php');
require('modeles/suivre.php');

$membres=liste_membre();


include('vues/liste_membre.php');



?>

