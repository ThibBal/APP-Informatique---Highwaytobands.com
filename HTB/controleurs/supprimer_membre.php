<?php

$id=$_POST['membre'];

require('modeles/membre.php'); 

supprimer_membre($id);

$_SESSION['temp'] = 'Membre supprimé !';


header ('Location: index.php?page=backoffice');
	
?>