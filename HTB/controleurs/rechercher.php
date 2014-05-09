<meta charset="utf-8" />
<?php 

require('modeles/rechercher.php');
$recherche= $_POST["recherche"];
$artiste=recherche_artiste($recherche);
$salle=recherche_salle($recherche);
$event=recherche_event($recherche);
$membre=recherche_membre($recherche);

include 'vues/rechercher.php'

?>