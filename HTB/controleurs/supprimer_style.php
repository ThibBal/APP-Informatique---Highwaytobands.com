<?php

$artiste=$_POST['artiste'];

require('modeles/artiste.php'); 

supprimer_artiste($artiste);

$_SESSION['temp'] = 'Artiste supprimé !';


header ('Location: index.php?page=backoffice');
	
?>