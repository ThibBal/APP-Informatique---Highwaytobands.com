<?php

$id=$_POST['artiste'];

require('modeles/artiste.php'); 

supprimer_artiste($id);

$_SESSION['temp'] = 'Artiste supprimé !';


header ('Location: index.php?page=backoffice');
	
?>