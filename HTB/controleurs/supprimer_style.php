<?php

$artiste=$_POST['style'];

require('modeles/style.php'); 

supprimer_style($artiste);

$_SESSION['temp'] = 'Style supprimé !';


header ('Location: index.php?page=backoffice');
	
?>