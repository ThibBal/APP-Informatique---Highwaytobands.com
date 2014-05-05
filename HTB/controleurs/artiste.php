<?php 

require('modeles/artiste.php');

$data=info_artiste($_GET["id"]);


include 'vues/artiste.php' 

?>