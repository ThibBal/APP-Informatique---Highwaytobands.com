<?php

$id=$_POST['concert'];

require('modeles/concert.php'); 

supprimer_concert($id);

$_SESSION['temp'] = 'Concert supprimé !';


header ('Location: index.php?page=backoffice');
	
?>