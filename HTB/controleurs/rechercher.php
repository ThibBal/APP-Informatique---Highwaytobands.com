<meta charset="utf-8" />
<?php 
require('modeles/concert.php');
require('modeles/rechercher.php');
require('modeles/suivre.php');
$recherche= mysql_real_escape_string(htmlspecialchars($_POST["recherche"]));
$artiste=recherche_artiste($recherche);
$salle=recherche_salle($recherche);
$event=recherche_concert($recherche);
$membre=recherche_membre($recherche);


include 'vues/rechercher.php'

?>