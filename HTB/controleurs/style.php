<?php
require('modeles/artiste.php');
require('modeles/style.php');
$styles=liste_style();
$artistes=liste_artiste();
include('vues/style.php');
?>

