<?php

$id=$_POST['salle'];

require('modeles/salle.php'); 

supprimer_salle($id);

$_SESSION['temp'] = 'Salle supprimée !';


header ('Location: index.php?page=backoffice');
	
?>